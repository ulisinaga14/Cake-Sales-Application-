<?php
/* @var $this KandidatController */
/* @var $model Kandidat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kandidat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kanNama'); ?>
		php echo		$form->activeTextField($model,'kanNama',array('class'=>"form-control",'size'=>45,'maxlength'=>45))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'kanNama'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kanPosisi'); ?>
		php echo		$form->activeTextField($model,'kanPosisi',array('class'=>"form-control",'size'=>10,'maxlength'=>10))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'kanPosisi'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->