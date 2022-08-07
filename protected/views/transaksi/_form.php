<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transTransId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transTransId',array('class'=>"form-control", 'size'=>45,'maxlength'=>45))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'transTransId'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transBarangId'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transBarangId',array('class'=>"form-control", 'size'=>20,'maxlength'=>20))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'transBarangId'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transTotal'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transTotal',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'transTotal'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transJumlah'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transJumlah',array('class'=>"form-control"))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'transJumlah'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'transStatus'); ?>
  	<?php echo   	CHtml::activeTextField($model,'transStatus',array('class'=>"form-control"))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'transStatus'); ?>
  	</small>
  </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->