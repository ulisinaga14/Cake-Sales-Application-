<?php
/* @var $this KueController */
/* @var $model Kue */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'KueId',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'KueNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueHarga'); ?>
  	<?php echo   	CHtml::activeTextField($model,'KueHarga',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueTipe'); ?>
  	<?php echo   	CHtml::activeTextField($model,'KueTipe',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueGambar'); ?>
  	<?php echo   	CHtml::activeTextArea($model,'KueGambar',array('class'=>"form-control", 'rows'=>6, 'cols'=>50))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->