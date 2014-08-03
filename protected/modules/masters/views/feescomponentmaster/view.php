<?php
/* @var $this FeescomponentmasterController */
/* @var $model Feescomponentmaster */

$this->breadcrumbs=array(
	'Feescomponentmasters'=>array('index'),
	$model->ComponentId,
);

$this->menu=array(
	array('label'=>'List Feescomponentmaster', 'url'=>array('index')),
	array('label'=>'Create Feescomponentmaster', 'url'=>array('create')),
	array('label'=>'Update Feescomponentmaster', 'url'=>array('update', 'id'=>$model->ComponentId)),
	array('label'=>'Delete Feescomponentmaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ComponentId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feescomponentmaster', 'url'=>array('admin')),
);
?>

<h1>View Feescomponentmaster #<?php echo $model->ComponentId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ComponentId',
		'InstituteId',
		'AcademicSessionId',
		'ComponentName',
		'IsRefundable',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
