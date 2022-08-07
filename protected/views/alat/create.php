<?php
/* @var $this AlatController */
/* @var $model Alat */

$this->breadcrumbs=array(
	'Alats'=>array('index'),
	'Create',
);
?>
<h1>Menambah Alat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>