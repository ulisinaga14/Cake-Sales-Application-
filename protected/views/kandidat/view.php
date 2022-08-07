<?php
/* @var $this KandidatController */
/* @var $model Kandidat */

$this->breadcrumbs=array(
	'Kandidats'=>array('index'),
	$model->kanId,
);
?>
<h1>Menampilkan Kandidat #<?php echo $model->kanId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'kanId',
		'kanNama',
		'kanPosisi',
	),
)); ?>
<a class="btn btn-primary" href="/sem4/blog/index.php?r=gii/crud/index">Kembali</a>