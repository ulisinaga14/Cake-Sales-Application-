<?php
/* @var $this KandidatController */
/* @var $model Kandidat */

$this->breadcrumbs=array(
	'Kandidats'=>array('index'),
	'Create',
);
?>
<h1>Tambah Kandidat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>