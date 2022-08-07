<?php
/* @var $this PosisiController */
/* @var $data Posisi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('posId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->posId), array('view', 'id'=>$data->posId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posNama')); ?>:</b>
	<?php echo CHtml::encode($data->posNama); ?>
	<br />


</div>