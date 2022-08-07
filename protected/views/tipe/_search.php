<?php
/* @var $this TipeController */
/* @var $model Tipe */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'TipeId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'TipeId',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'TipeNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'TipeNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>80))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->