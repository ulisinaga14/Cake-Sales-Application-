<?php
/* @var $this PemilihController */
/* @var $model Pemilih */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemilih-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pemNik'); ?>
		<?php echo 		CHtml::activeTextField($model,'pemNik',array('class'=>"form-control",'size'=>20,'maxlength'=>20))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'pemNik'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pemNama'); ?>
		<?php echo 		CHtml::activeTextField($model,'pemNama',array('class'=>"form-control",'size'=>45,'maxlength'=>45))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'pemNama'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pemTglLahir'); ?>
		<?php echo 		CHtml::activeTextField($model,'pemTglLahir',array('class'=>"form-control"))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'pemTglLahir'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pemAlamat'); ?>
		<?php echo 		CHtml::activeTextArea($model,'pemAlamat',array('class'=>"form-control",'rows'=>6, 'cols'=>50))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'pemAlamat'); ?>
		</small>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pemNoHp'); ?>
		<?php echo 		CHtml::activeTextField($model,'pemNoHp',array('class'=>"form-control",'size'=>45,'maxlength'=>45))		; ?>
		<small  class="form-text text-muted">
		<?php echo $form->error($model,'pemNoHp'); ?>
		</small>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->