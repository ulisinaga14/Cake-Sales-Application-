<?php
/* @var $this AlatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alats',
);

$this->menu=array(
	array('label'=>'Create Alat', 'url'=>array('create')),
	array('label'=>'Manage Alat', 'url'=>array('admin')),
);
?>

<h1>Alats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
