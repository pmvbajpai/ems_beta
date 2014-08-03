<?php
/* @var $this BusrouteController */
/* @var $model Busroute */

$this->breadcrumbs=array(
	'Busroutes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Busroute', 'url'=>array('index')),
	array('label'=>'Manage Busroute', 'url'=>array('admin')),
);
?>

<h1>Create Busroute</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>