<?php
/* @var $this TipeController */
/* @var $model Tipe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'TipeNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'TipeNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>80))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'TipeNama'); ?>
  	</small>
  </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->