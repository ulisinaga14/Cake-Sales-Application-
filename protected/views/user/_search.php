<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'UserLogin'); ?>
  	<?php echo   	CHtml::activeTextField($model,'UserLogin',array('class'=>"form-control", 'size'=>60,'maxlength'=>64))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Nama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Nama',array('class'=>"form-control", 'size'=>60,'maxlength'=>64))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Password'); ?>
  	<?php echo   	CHtml::activePasswordField($model,'Password',array('class'=>"form-control", 'size'=>60,'maxlength'=>64))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Grup'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Grup',array('class'=>"form-control"))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->