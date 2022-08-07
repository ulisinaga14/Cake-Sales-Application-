<?php
/* @var $this PemilihController */
/* @var $model Pemilih */

$this->breadcrumbs=array(
	'Pemilihs'=>array('index'),
	'Create',
);
?>
<h1>Tambah Pemilih</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>