<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('transId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->transId), array('view', 'id'=>$data->transId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transTransId')); ?>:</b>
	<?php echo CHtml::encode($data->transTransId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transBarangId')); ?>:</b>
	<?php echo CHtml::encode($data->transBarangId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transTotal')); ?>:</b>
	<?php echo CHtml::encode($data->transTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transJumlah')); ?>:</b>
	<?php echo CHtml::encode($data->transJumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transStatus')); ?>:</b>
	<?php echo CHtml::encode($data->transStatus); ?>
	<br />


</div>