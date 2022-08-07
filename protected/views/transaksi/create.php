<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	'Create',
);
?>
<h1>Menambah Transaksi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>