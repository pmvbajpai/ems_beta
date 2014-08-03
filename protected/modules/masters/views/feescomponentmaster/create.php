<?php
/* @var $this FeescomponentmasterController */
/* @var $model Feescomponentmaster */

$this->breadcrumbs=array(
	'Feescomponentmasters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feescomponentmaster', 'url'=>array('index')),
	array('label'=>'Manage Feescomponentmaster', 'url'=>array('admin')),
);
?>

<h1>Create Feescomponentmaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>