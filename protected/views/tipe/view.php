<?php
/* @var $this TipeController */
/* @var $model Tipe */

$this->breadcrumbs=array(
	'Tipes'=>array('index'),
	$model->TipeId,
);
?>
<h1>Menampilkan Tipe #<?php echo $model->TipeId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'TipeId',
		'TipeNama',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>