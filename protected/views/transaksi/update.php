<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->transId=>array('view','id'=>$model->transId),
	'Update',
);
?>
<h1>Mengubah Transaksi <?php echo $model->transId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>