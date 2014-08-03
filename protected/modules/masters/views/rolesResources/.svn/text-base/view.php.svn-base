<?php
/* @var $this RolesResourcesController */
/* @var $model RolesResources */

$this->breadcrumbs=array(
	'Roles Resources'=>array('index'),
	$model->RolesResourcesId,
);

$this->menu=array(
	array('label'=>'List RolesResources', 'url'=>array('index')),
	array('label'=>'Create RolesResources', 'url'=>array('create')),
	array('label'=>'Update RolesResources', 'url'=>array('update', 'id'=>$model->RolesResourcesId)),
	array('label'=>'Delete RolesResources', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RolesResourcesId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolesResources', 'url'=>array('admin')),
);
?>

<h1>View RolesResources #<?php echo $model->RolesResourcesId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RolesResourcesId',
		'RoleId',
		'ResourceId',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
