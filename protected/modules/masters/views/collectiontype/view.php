<?php
/* @var $this CollectiontypeController */
/* @var $model Mastercollectiontype */

$this->breadcrumbs=array(
	'Mastercollectiontypes'=>array('index'),
	$model->MasterCollectionTypeId,
);

$this->menu=array(
	array('label'=>'List Mastercollectiontype', 'url'=>array('index')),
	array('label'=>'Create Mastercollectiontype', 'url'=>array('create')),
	array('label'=>'Update Mastercollectiontype', 'url'=>array('update', 'id'=>$model->MasterCollectionTypeId)),
	array('label'=>'Delete Mastercollectiontype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MasterCollectionTypeId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mastercollectiontype', 'url'=>array('admin')),
);
?>

<h1>View Mastercollectiontype #<?php echo $model->MasterCollectionTypeId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MasterCollectionTypeId',
		'MasterCollectionType',
		'Status',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
