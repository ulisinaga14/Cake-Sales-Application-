<?php
/* @var $this BahanController */
/* @var $data Bahan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BahanId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BahanId), array('view', 'id'=>$data->BahanId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BahanNama')); ?>:</b>
	<?php echo CHtml::encode($data->BahanNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->Jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BahanTipe')); ?>:</b>
	<?php echo CHtml::encode($data->BahanTipe); ?>
	<br />


</div>