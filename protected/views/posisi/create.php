<?php
/* @var $this PosisiController */
/* @var $model Posisi */

$this->breadcrumbs=array(
	'Posisis'=>array('index'),
	'Create',
);
?>
<h1>Tambah Posisi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>