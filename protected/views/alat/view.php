<?php
/* @var $this AlatController */
/* @var $model Alat */

$this->breadcrumbs=array(
	'Alats'=>array('index'),
	$model->AlatId,
);
?>
<h1>Menampilkan Alat #<?php echo $model->AlatId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'AlatId',
		'AlatNama',
		'AlatTipe',
		'Keterangan',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>