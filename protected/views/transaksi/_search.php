<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transId',array('class'=>"form-control", 'size'=>20,'maxlength'=>20))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transTransId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transTransId',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transBarangId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transBarangId',array('class'=>"form-control", 'size'=>20,'maxlength'=>20))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transTotal'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transTotal',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transJumlah'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transJumlah',array('class'=>"form-control"))		; ?>
	</div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transStatus'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transStatus',array('class'=>"form-control"))		; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->