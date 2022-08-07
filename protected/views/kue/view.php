<?php
/* @var $this KueController */
/* @var $model Kue */

$this->breadcrumbs=array(
	'Kues'=>array('index'),
	$model->KueId,
);
?>
<h1>Menampilkan Kue #<?php echo $model->KueId; ?></h1>
<div class="row">
	<div class="col-6">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'tagName'=>'ul',
	'htmlOptions'=>array('class'=>'list-group'),
	'itemTemplate'=>"<li class=\"{class} list-group-item\">{label} : {value}</li>\n",
	'attributes'=>array(
		'KueId',
		'KueNama',
		'KueHarga',
		'KueTipe',
	),
)); ?>
	</div>
		<div class="col-6">
			<img src="<?php echo Yii::app()->baseUrl.'/images/'.$model->KueGambar ?>">
	</div>
<?php echo CHtml::link('Kembali',array('index'),array('class'=>'btn btn-primary')); ?>