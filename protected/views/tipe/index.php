<?php
/* @var $this TipeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipes',
);

$this->menu=array(
	array('label'=>'Create Tipe', 'url'=>array('create')),
	array('label'=>'Manage Tipe', 'url'=>array('admin')),
);
?>

<h1>Tipes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
