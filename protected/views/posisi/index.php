<?php
/* @var $this PosisiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posisis',
);

$this->menu=array(
	array('label'=>'Create Posisi', 'url'=>array('create')),
	array('label'=>'Manage Posisi', 'url'=>array('admin')),
);
?>

<h1>Posisis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
