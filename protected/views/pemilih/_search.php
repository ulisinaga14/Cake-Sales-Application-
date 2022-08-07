<?php
/* @var $this PemilihController */
/* @var $model Pemilih */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pemNik'); ?>
		<?php echo $form->textField($model,'pemNik',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemNama'); ?>
		<?php echo $form->textField($model,'pemNama',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemTglLahir'); ?>
		<?php echo $form->textField($model,'pemTglLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemAlamat'); ?>
		<?php echo $form->textArea($model,'pemAlamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemNoHp'); ?>
		<?php echo $form->textField($model,'pemNoHp',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->