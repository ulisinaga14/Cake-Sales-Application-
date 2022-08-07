<?php
/* @var $this TipeController */
/* @var $data Tipe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipeId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TipeId), array('view', 'id'=>$data->TipeId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TipeNama')); ?>:</b>
	<?php echo CHtml::encode($data->TipeNama); ?>
	<br />


</div>