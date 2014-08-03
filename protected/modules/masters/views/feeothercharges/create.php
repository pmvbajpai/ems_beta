<?php
/* @var $this FeeotherchargesController */
/* @var $model Feeothercharges */

$this->breadcrumbs=array(
	'Feeothercharges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feeothercharges', 'url'=>array('index')),
	array('label'=>'Manage Feeothercharges', 'url'=>array('admin')),
);
?>

<h1>Create Feeothercharges</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>