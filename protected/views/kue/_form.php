<?php
/* @var $this KueController */
/* @var $model Kue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kue-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
  'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan tanda <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueNama'); ?>
  	<?php echo   	CHtml::activeTextField($model,'KueNama',array('class'=>"form-control", 'size'=>60,'maxlength'=>200))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'KueNama'); ?>
  	</small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueHarga'); ?>
  	<?php echo   	CHtml::activeTextField($model,'KueHarga',array('class'=>"form-control", 'size'=>10,'maxlength'=>10))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'KueHarga'); ?>
  	</small>
  </div>

  <div class="form-group">
    <?php echo $form->labelEx($model,'KueTipe'); ?>
    <?php 
      // retrieve the models from db
      $models = Tipe::model()->findAll();

      // format models as $key=>$value with listData
      $list = CHtml::listData($models, 
              'TipeId', 'TipeNama');
      echo $form->dropDownList($model,'KueTipe',
      $list,
      array('class'=>"custom-select", 'empty'=>'-Pilih Tipe Kue-'))    
    ; ?>
    <small class="form-text text-muted">
      <?php echo $form->error($model,'KueTipe'); ?>
    </small>
  </div>

  <div class="form-group">
  	<?php echo $form->labelEx($model,'KueGambar'); ?>
  	<?php echo $form->fileField($model,'KueGambar',array('class'=>"form-control"))  	; ?>
  	<small class="form-text text-muted">
  		<?php echo $form->error($model,'KueGambar'); ?>
  	</small>
  </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah',array('class'=>"btn btn-primary")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->