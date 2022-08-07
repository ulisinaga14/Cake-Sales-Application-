<?php
/* @var $this KueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kues',
);

$this->menu=array(
	array('label'=>'Create Kue', 'url'=>array('create')),
	array('label'=>'Manage Kue', 'url'=>array('admin')),
);
?>

<h1>Kues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
