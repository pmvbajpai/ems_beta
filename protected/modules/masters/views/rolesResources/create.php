<?php
/* @var $this RolesResourcesController */
/* @var $model RolesResources */

$this->breadcrumbs=array(
	'Roles Resources'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolesResources', 'url'=>array('index')),
	array('label'=>'Manage RolesResources', 'url'=>array('admin')),
);
?>

<h1>Create RolesResources</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>