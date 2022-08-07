<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		if(isset($_GET['coba'])){
			$this->render('index2');
		}
		else{
			$this->render('index');
		}
		
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$mygoogle = $this->getGoogle();
		$this->render('login',
			array(
				'model'=>$model,
				'google'=>$mygoogle,
			)
		);
	}

	/**
	* Display the login page
	*/
	public function actionValidasi()
	{
		$mygoogle = $this->getGoogle();
		if($mygoogle['islogin']){
			//cek apakah sudah login
			$email = $mygoogle['info']->email;
			$name = $mygoogle['info']->name;
			$id = $mygoogle['info']->id;

			$users= User::model()->findByPk($email);
			if($users==null){
				//data baru...
				$users= new User();
				$users->UserLogin = $email;
				$users->Password = $id;
				$users->Nama = $name;
				$users->Grup=1;
				$users->save();
			}

			$identity=new UserIdentity($email,$id);
			$identity->authenticate();
			
			$duration=3600*24*30; // 30 days
			Yii::app()->user->login($identity,$duration);
			$this->redirect(array('index'));
			}
			else{
				$this->redirect(array('login'));
			}
		}

	public function getGoogle(){
		require_once 'protected/extensions/google/vendor/autoload.php';
		// init configuration
		$clientID = '827701586713-9o89dtjhbm642mcr3b0dcqqdji2h3bg9.apps.googleusercontent.com';
		$clientSecret = 'eAoGUw7Ab1D8LopgX6ElEUIh';
		$redirectUri = 'http://localhost/sem4/blog/index.php?r=site/validasi';
		   
		// create Client Request to access Google API
		$client = new Google_Client();
		$client->setClientId($clientID);
		$client->setClientSecret($clientSecret);
		$client->setRedirectUri($redirectUri);
		$client->addScope("email");
		$client->addScope("profile");
		 
		 $google_account_info = null; 
		 $islogin =false;
		// authenticate code from Google OAuth Flow
		if (isset($_GET['code'])) {
		  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		  $client->setAccessToken($token['access_token']);
		   
		  // get profile info
		  $google_oauth = new Google_Service_Oauth2($client);
		  $google_account_info = $google_oauth->userinfo->get();
		  $email =  $google_account_info->email;
		  $name =  $google_account_info->name;
		  $islogin =true;
		  // now you can use this profile info to create account in your website and make user logged in.
		} 
		return array(
			'islogin'=>$islogin ,
			'info'=>$google_account_info ,
			'client'=>$client ,
		);
		/*
		else {
		  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
		} */
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}