<?php
/* @var $this PosisiController */
/* @var $model Posisi */

$this->breadcrumbs=array(
	'Posisis'=>array('index'),
	$model->posId=>array('view','id'=>$model->posId),
	'Update',
);
?>
<h1>Mengubah Posisi <?php echo $model->posId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>