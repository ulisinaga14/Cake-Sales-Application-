<?php
/* @var $this AlatController */
/* @var $model Alat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'AlatId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'AlatId',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'AlatNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'AlatNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'AlatTipe'); ?>
  	<?php echo   	CHtml::activeTextField($model,'AlatTipe',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Keterangan'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Keterangan',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->