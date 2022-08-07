<?php
/* @var $this PosisiController */
/* @var $model Posisi */

$this->breadcrumbs=array(
	'Posisis'=>array('index'),
	$model->posId,
);
?>
<h1>Menampilkan Posisi #<?php echo $model->posId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'posId',
		'posNama',
	),
)); ?>
<a class="btn btn-primary" href="/sem4/blog/index.php?r=gii/crud/index">Kembali</a>