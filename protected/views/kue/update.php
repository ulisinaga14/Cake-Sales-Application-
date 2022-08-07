<?php
/* @var $this KueController */
/* @var $model Kue */

$this->breadcrumbs=array(
	'Kues'=>array('index'),
	$model->KueId=>array('view','id'=>$model->KueId),
	'Update',
);
?>
<h1>Mengubah Kue <?php echo $model->KueId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>