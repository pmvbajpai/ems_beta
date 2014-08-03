<?php
/* @var $this PickuppointController */
/* @var $model Pickuppoint */

$this->breadcrumbs=array(
	'Pickuppoints'=>array('index'),
	$model->PickupPointId,
);

$this->menu=array(
	array('label'=>'List Pickuppoint', 'url'=>array('index')),
	array('label'=>'Create Pickuppoint', 'url'=>array('create')),
	array('label'=>'Update Pickuppoint', 'url'=>array('update', 'id'=>$model->PickupPointId)),
	array('label'=>'Delete Pickuppoint', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PickupPointId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pickuppoint', 'url'=>array('admin')),
);
?>

<h1>View Pickuppoint #<?php echo $model->PickupPointId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PickupPointId',
		'InstituteId',
		'PickupPointName',
		'Amount',
		'ZipCode',
		'Remarks',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
