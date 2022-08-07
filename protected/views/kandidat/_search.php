<?php
/* @var $this KandidatController */
/* @var $model Kandidat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'kanId'); ?>
		php echo		$form->activeTextField($model,'kanId',array('class'=>"form-control",'size'=>10,'maxlength'=>10))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kanNama'); ?>
		php echo		$form->activeTextField($model,'kanNama',array('class'=>"form-control",'size'=>45,'maxlength'=>45))		; ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'kanPosisi'); ?>
		php echo		$form->activeTextField($model,'kanPosisi',array('class'=>"form-control",'size'=>10,'maxlength'=>10))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->