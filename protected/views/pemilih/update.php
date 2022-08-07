<?php
/* @var $this PemilihController */
/* @var $model Pemilih */

$this->breadcrumbs=array(
	'Pemilihs'=>array('index'),
	$model->pemNik=>array('view','id'=>$model->pemNik),
	'Update',
);
?>
<h1>Mengubah Pemilih <?php echo $model->pemNik; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>