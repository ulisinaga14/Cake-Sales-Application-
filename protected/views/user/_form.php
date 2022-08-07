<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'UserLogin'); ?>
  	<?php echo   	CHtml::activeTextField($model,'UserLogin',array('class'=>"form-control", 'size'=>60,'maxlength'=>64))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'UserLogin'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Nama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Nama',array('class'=>"form-control", 'size'=>60,'maxlength'=>64))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'Nama'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Password'); ?>
  	<?php echo   	CHtml::activePasswordField($model,'Password',array('class'=>"form-control", 'size'=>60,'maxlength'=>64))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'Password'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Grup'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Grup',array('class'=>"form-control"))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'Grup'); ?>
  	</small>
  </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->