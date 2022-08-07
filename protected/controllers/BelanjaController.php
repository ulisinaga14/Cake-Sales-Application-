<?php

class BelanjaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('pilih','bayar'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		require_once 'protected/extensions/Midtrans/Midtrans.php';

		//Set Your server key
		Midtrans\Config::$serverKey = "SB-Mid-server-czNnOYymG1-OmxAGQ2aX098Q";
		$transaksi = $this->loadModel($id);
		// Get transaction status to Midtrans API
		try {
			$status = Midtrans\Transaction::status($transaksi->transTransId);
		} catch (Exception $e) {
			echo $e->getMessage();
			die();
		}
		
		if($status->transaction_status=='settlement'){
			$transaksi->transStatus=1;
			$transaksi->save(false);
		}
		
		$this->render('view',array(
			'model'=>$transaksi,
			'status'=>$status,
		));
	}

	public function actionPilih()
	{
		$kue = Kue::model()->findAll();
		
		$this->render('pilih',array(
			'model'=>$kue,
		));
	}
	 
	public function actionBayar($id)
	{
		// ambil 1 kue dengan primary key
		$kue = Kue::model()->findByPk($id);
		
		//generate token midtrans
		//#start
		
		require_once 'protected/extensions/midtrans/Midtrans.php';
		//Set Your server key
		Midtrans\Config::$serverKey = "SB-Mid-server-czNnOYymG1-OmxAGQ2aX098Q";
		// Uncomment for production environment
		// Config::$isProduction = true;
		Midtrans\Config::$isSanitized = Midtrans\Config::$is3ds = true;
	
		$transTransId = date('Ymdhis').'-'.$id;
		// Required
		$transaction_details = array(
			'order_id' => $transTransId,
			'gross_amount' => $kue->KueHarga*$_POST['jumlah'], // no decimal allowed for creditcard
		);
		// Optional
		$item_details = array (
			array(
				'id' => $kue->KueId,
				'price' => $kue->KueHarga,
				'quantity' => $_POST['jumlah'],
				'name' => $kue->KueNama
			),
		  );
		// Optional
		//ambil data user:
		$usr = User::model()->findByPk(Yii::app()->user->getId());
		$customer_details = array(
			'first_name'    => $usr->Nama,
			'last_name'     => "",
			'email'         => $usr->UserLogin,
			'phone'         => "08xxxxxx",
			'billing_address'  => 'Jalan. Jalan',
			'shipping_address' => 'Jalan. Jalan',
		);
		// Fill transaction details
		$transaction = array(
			'transaction_details' => $transaction_details,
			'customer_details' => $customer_details,
			'item_details' => $item_details,
		);

		$snapToken = Midtrans\Snap::getSnapToken($transaction);
		//#end 
		
		// simpan transaksi
		$trans = new Transaksi();
		$trans->transTransId=$transTransId;
		$trans->transBarangId=$kue->KueId;
		$trans->transTotal=$kue->KueHarga*$_POST['jumlah'];
		$trans->transJumlah=$_POST['jumlah'];
		$trans->transStatus=0;
		$trans->save();
		$this->render('bayar',array(
			'kue'=>$kue,
			'token'=>$snapToken,
		));
	}
}
