<?php
/* @var $this FeeotherchargesController */
/* @var $model Feeothercharges */

$this->breadcrumbs=array(
	'Feeothercharges'=>array('index'),
	$model->FeeOtherChargesId,
);

$this->menu=array(
	array('label'=>'List Feeothercharges', 'url'=>array('index')),
	array('label'=>'Create Feeothercharges', 'url'=>array('create')),
	array('label'=>'Update Feeothercharges', 'url'=>array('update', 'id'=>$model->FeeOtherChargesId)),
	array('label'=>'Delete Feeothercharges', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FeeOtherChargesId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feeothercharges', 'url'=>array('admin')),
);
?>

<h1>View Feeothercharges #<?php echo $model->FeeOtherChargesId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FeeOtherChargesId',
		'InstituteId',
		'AcademicSessionId',
		'OtherComponentName',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
