<?php
/* @var $this DefaultController */
/* @var $model Institute */

$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	$model->InstituteId,
);

$this->menu=array(
	array('label'=>'List Institute', 'url'=>array('index')),
	array('label'=>'Create Institute', 'url'=>array('create')),
	array('label'=>'Update Institute', 'url'=>array('update', 'id'=>$model->InstituteId)),
	array('label'=>'Delete Institute', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->InstituteId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Institute', 'url'=>array('admin')),
);
?>

<h1>View Institute #<?php echo $model->InstituteId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'InstituteId',
		'InstituteName',
		'InstituteLogo',
		'InstituteAddress1',
		'InstituteAddress2',
		'InstituteZipCode',
		'InstituteCityId',
		'InstituteStateId',
		'InstituteCountryId',
		'InstitutePhone1',
		'InstitutePhone2',
		'InsituteFax1',
		'InstituteFax2',
		'InstituteEmail1',
		'InstituteEmail2',
		'InsituteWebUrl',
		'InstituteDescription',
		'InstituteAccreditionId',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
