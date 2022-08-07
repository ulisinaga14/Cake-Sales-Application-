<?php
/* @var $this BahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bahans',
);

$this->menu=array(
	array('label'=>'Create Bahan', 'url'=>array('create')),
	array('label'=>'Manage Bahan', 'url'=>array('admin')),
);
?>

<h1>Bahans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
