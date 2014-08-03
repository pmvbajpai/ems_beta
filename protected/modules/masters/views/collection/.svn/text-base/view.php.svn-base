<?php
/* @var $this CollectionController */
/* @var $model Mastercollection */

$this->breadcrumbs=array(
	'Mastercollections'=>array('index'),
	$model->MasterCollectionId,
);

$this->menu=array(
	array('label'=>'List Mastercollection', 'url'=>array('index')),
	array('label'=>'Create Mastercollection', 'url'=>array('create')),
	array('label'=>'Update Mastercollection', 'url'=>array('update', 'id'=>$model->MasterCollectionId)),
	array('label'=>'Delete Mastercollection', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MasterCollectionId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mastercollection', 'url'=>array('admin')),
);
?>

<h1>View Mastercollection #<?php echo $model->MasterCollectionId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MasterCollectionId',
		'MasterCollectionTypeId',
		'CollectionName',
		'Description',
		'Status',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
