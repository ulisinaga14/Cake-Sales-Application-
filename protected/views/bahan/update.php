<?php
/* @var $this BahanController */
/* @var $model Bahan */

$this->breadcrumbs=array(
	'Bahans'=>array('index'),
	$model->BahanId=>array('view','id'=>$model->BahanId),
	'Update',
);
?>
<h1>Mengubah Bahan <?php echo $model->BahanId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>