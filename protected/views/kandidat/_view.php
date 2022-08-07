<?php
/* @var $this KandidatController */
/* @var $data Kandidat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kanId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kanId), array('view', 'id'=>$data->kanId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kanNama')); ?>:</b>
	<?php echo CHtml::encode($data->kanNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kanPosisi')); ?>:</b>
	<?php echo CHtml::encode($data->kanPosisi); ?>
	<br />


</div>