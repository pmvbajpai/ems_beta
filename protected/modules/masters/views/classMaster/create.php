<?php
/* @var $this ClassMasterController */
/* @var $model Classsectionassociation */

$this->breadcrumbs=array(
	'Classsectionassociations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classsectionassociation', 'url'=>array('index')),
	array('label'=>'Manage Classsectionassociation', 'url'=>array('admin')),
);
?>

<h1>Create Classsectionassociation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>