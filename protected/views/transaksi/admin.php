<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksis'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaksi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mengelola Transaksis</h1>
<hr>

<?php echo CHtml::link('Tambah',array('create'),array('class'=>'btn btn-primary')); ?>&nbsp;
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaksi-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass'=>'table',
	'pager'=>array(
	'class'=>'CLinkPagerCustom',
	),
	//'filter'=>$model,
	'summaryText' => 'Menampilkan {start}-{end} dari {count} data',
    'emptyText'=>'Data tidak ditemukan',
	'columns'=>array(
		'transId',
		'transTransId',
		'transBarangId',
		'transTotal',
		'transJumlah',
		'transStatus',
		array(
			'template'=>'<div style="width:200px">{view}{update}{delete}</div>',
			'class'=>'CButtonColumn',
			'buttons'=>array(
				'view'=>array(
					'label'=>'<i class="fa fa-search" aria-hidden="true"></i>',
					'imageUrl'=>false,
					'options'=>array('class'=>'btn btn-info'),
				),
				'update'=>array(
					'label'=>'<i class="fa fa-pencil" aria-hidden="true"></i>',
					'imageUrl'=>false,
					'options'=>array('class'=>'btn btn-success'),
				),
				'delete'=>array(
					'label'=>'<i class="fa fa-trash-o" aria-hidden="true"></i>',
					'imageUrl'=>false,
					'options'=>array('class'=>'btn btn-danger'),
				),
			),
		),
	),
)); ?>
