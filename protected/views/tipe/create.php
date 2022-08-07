<?php
/* @var $this TipeController */
/* @var $model Tipe */

$this->breadcrumbs=array(
	'Tipes'=>array('index'),
	'Create',
);
?>
<h1>Menambah Tipe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>