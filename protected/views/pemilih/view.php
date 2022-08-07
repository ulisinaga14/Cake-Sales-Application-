<?php
/* @var $this PemilihController */
/* @var $model Pemilih */

$this->breadcrumbs=array(
	'Pemilihs'=>array('index'),
	$model->pemNik,
);
?>
<h1>Menampilkan Pemilih #<?php echo $model->pemNik; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'pemNik',
		'pemNama',
		'pemTglLahir',
		'pemAlamat',
		'pemNoHp',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>