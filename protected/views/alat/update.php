<?php
/* @var $this AlatController */
/* @var $model Alat */

$this->breadcrumbs=array(
	'Alats'=>array('index'),
	$model->AlatId=>array('view','id'=>$model->AlatId),
	'Update',
);
?>
<h1>Mengubah Alat <?php echo $model->AlatId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>