<?php
/* @var $this PemilihController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemilihs',
);

$this->menu=array(
	array('label'=>'Create Pemilih', 'url'=>array('create')),
	array('label'=>'Manage Pemilih', 'url'=>array('admin')),
);
?>

<h1>Pemilihs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
