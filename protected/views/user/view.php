<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->UserLogin,
);
?>
<h1>Menampilkan User #<?php echo $model->UserLogin; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'UserLogin',
		'Nama',
		'Password',
		'Grup',
	),
)); ?>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>