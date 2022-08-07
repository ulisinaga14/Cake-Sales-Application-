<?php
/* @var $this KueController */
/* @var $data Kue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('KueId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->KueId), array('view', 'id'=>$data->KueId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KueNama')); ?>:</b>
	<?php echo CHtml::encode($data->KueNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KueHarga')); ?>:</b>
	<?php echo CHtml::encode($data->KueHarga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KueTipe')); ?>:</b>
	<?php echo CHtml::encode($data->KueTipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KueGambar')); ?>:</b>
	<?php echo CHtml::encode($data->KueGambar); ?>
	<br />


</div>