<?php
/* @var $this BahanController */
/* @var $model Bahan */

$this->breadcrumbs=array(
	'Bahans'=>array('index'),
	'Create',
);
?>
<h1>Menambah Bahan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>