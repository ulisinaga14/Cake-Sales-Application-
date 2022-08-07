<?php
/* @var $this BahanController */
/* @var $model Bahan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'BahanId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'BahanId',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'BahanNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'BahanNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Jumlah'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Jumlah',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'BahanTipe'); ?>
  	<?php echo   	CHtml::activeTextField($model,'BahanTipe',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->