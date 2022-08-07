<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	$model->transId,
);
?>
<h1>Menampilkan Transaksi #<?php echo $model->transId; ?></h1>
<div class="row">
	<div class="col-6">
<?php 
//print_r($status);
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'transId',
		'transTransId',
		'transBarangId',
		'transTotal',
		'transJumlah',
		array(
			'label'=>'Status Transaksi',
			'value'=>function($model){
				if($model->transStatus==='0'){
					return 'Belum Terbayar';
				}
				elseif($model->transStatus==='1'){
					return 'Sudah Terbayar';
				}
				else
					return 'Pending';
			}
			
		),
		array(
			'label'=>'Tipe Pembayaran',
			'value'=>$status->payment_type,
		),
		array(
			'label'=>'Jumlah Pembayaran',
			'value'=>$status->gross_amount,
		), 
		array(
			'label'=>'Status Pembayaran',
			'value'=>$status->transaction_status,
		),

	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>