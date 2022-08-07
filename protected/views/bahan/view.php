<?php
/* @var $this BahanController */
/* @var $model Bahan */

$this->breadcrumbs=array(
	'Bahans'=>array('index'),
	$model->BahanId,
);
?>
<h1>Menampilkan Bahan #<?php echo $model->BahanId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'BahanId',
		'BahanNama',
		'Jumlah',
		'BahanTipe',
	),
)); ?>

<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>