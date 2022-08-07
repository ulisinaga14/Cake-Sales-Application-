<?php
/* @var $this KueController */
/* @var $model Kue */

$this->breadcrumbs=array(
	'Kues'=>array('index'),
	'Create',
);
?>
<h1>Menambah Kue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>