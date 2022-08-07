<?php
/* @var $this AlatController */
/* @var $model Alat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'AlatNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'AlatNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'AlatNama'); ?>
  	</small>
  </div>

  <div class="form-group">
    <?php echo $form->labelEx($model,'AlatTipe'); ?>
    <?php 
      // retrieve the models from db
      $models = Tipe::model()->findAll();

      // format models as $key=>$value with listData
      $list = CHtml::listData($models, 
              'TipeId', 'TipeNama');
      echo $form->dropDownList($model,'AlatTipe',
      $list,
      array('class'=>"custom-select", 'empty'=>'-Pilih Tipe AlatTipe-'))    
    ; ?>
    <small class="form-text text-muted">
      <?php echo $form->error($model,'AlatTipe'); ?>
    </small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'Keterangan'); ?>
  	<?php echo   	CHtml::activeTextField($model,'Keterangan',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'Keterangan'); ?>
  	</small>
  </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->