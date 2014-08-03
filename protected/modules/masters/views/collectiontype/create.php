<?php
/* @var $this CollectiontypeController */
/* @var $model Mastercollectiontype */

$this->breadcrumbs=array(
	'Mastercollectiontypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mastercollectiontype', 'url'=>array('index')),
	array('label'=>'Manage Mastercollectiontype', 'url'=>array('admin')),
);
?>

<h1>Create Mastercollectiontype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>