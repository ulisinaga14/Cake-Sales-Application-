<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->UserLogin=>array('view','id'=>$model->UserLogin),
	'Update',
);
?>
<h1>Mengubah User <?php echo $model->UserLogin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>