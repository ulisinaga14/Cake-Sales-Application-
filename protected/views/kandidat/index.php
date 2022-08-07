<?php
/* @var $this KandidatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kandidats',
);

$this->menu=array(
	array('label'=>'Create Kandidat', 'url'=>array('create')),
	array('label'=>'Manage Kandidat', 'url'=>array('admin')),
);
?>

<h1>Kandidats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
