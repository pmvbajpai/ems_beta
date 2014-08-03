<?php
/* @var $this BusController */
/* @var $model Bus */

$this->breadcrumbs=array(
	'Buses'=>array('index'),
	$model->BusId,
);

$this->menu=array(
	array('label'=>'List Bus', 'url'=>array('index')),
	array('label'=>'Create Bus', 'url'=>array('create')),
	array('label'=>'Update Bus', 'url'=>array('update', 'id'=>$model->BusId)),
	array('label'=>'Delete Bus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BusId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bus', 'url'=>array('admin')),
);
?>

<h1>View Bus #<?php echo $model->BusId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BusId',
		'InstituteId',
		'BusName',
		'BusNumber',
		'Capacity',
		'Description',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
