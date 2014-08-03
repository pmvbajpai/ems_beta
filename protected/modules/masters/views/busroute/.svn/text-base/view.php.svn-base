<?php
/* @var $this BusrouteController */
/* @var $model Busroute */

$this->breadcrumbs=array(
	'Busroutes'=>array('index'),
	$model->BusRouteId,
);

$this->menu=array(
	array('label'=>'List Busroute', 'url'=>array('index')),
	array('label'=>'Create Busroute', 'url'=>array('create')),
	array('label'=>'Update Busroute', 'url'=>array('update', 'id'=>$model->BusRouteId)),
	array('label'=>'Delete Busroute', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BusRouteId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Busroute', 'url'=>array('admin')),
);
?>

<h1>View Busroute #<?php echo $model->BusRouteId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BusRouteId',
		'InstituteId',
		'AcademicSessionId',
		'RouteName',
		'BusId',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
