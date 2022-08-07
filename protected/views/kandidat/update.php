<?php
/* @var $this KandidatController */
/* @var $model Kandidat */

$this->breadcrumbs=array(
	'Kandidats'=>array('index'),
	$model->kanId=>array('view','id'=>$model->kanId),
	'Update',
);
?>
<h1>Mengubah Kandidat <?php echo $model->kanId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>