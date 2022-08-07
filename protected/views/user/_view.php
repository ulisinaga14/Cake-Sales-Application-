<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserLogin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->UserLogin), array('view', 'id'=>$data->UserLogin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama')); ?>:</b>
	<?php echo CHtml::encode($data->Nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Grup')); ?>:</b>
	<?php echo CHtml::encode($data->Grup); ?>
	<br />


</div>