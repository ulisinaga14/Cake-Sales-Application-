<?php
/* @var $this AlatController */
/* @var $data Alat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlatId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AlatId), array('view', 'id'=>$data->AlatId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlatNama')); ?>:</b>
	<?php echo CHtml::encode($data->AlatNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlatTipe')); ?>:</b>
	<?php echo CHtml::encode($data->AlatTipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->Keterangan); ?>
	<br />


</div>