<?php
/* @var $this TipeController */
/* @var $model Tipe */

$this->breadcrumbs=array(
	'Tipes'=>array('index'),
	$model->TipeId=>array('view','id'=>$model->TipeId),
	'Update',
);
?>
<h1>Mengubah Tipe <?php echo $model->TipeId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>