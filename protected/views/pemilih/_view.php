<?php
/* @var $this PemilihController */
/* @var $data Pemilih */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemNik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pemNik), array('view', 'id'=>$data->pemNik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemNama')); ?>:</b>
	<?php echo CHtml::encode($data->pemNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemTglLahir')); ?>:</b>
	<?php echo CHtml::encode($data->pemTglLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemAlamat')); ?>:</b>
	<?php echo CHtml::encode($data->pemAlamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemNoHp')); ?>:</b>
	<?php echo CHtml::encode($data->pemNoHp); ?>
	<br />


</div>