<?php
/* @var $this ClassController */
/* @var $model MasterClass */

$this->breadcrumbs=array(
	'Master Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterClass', 'url'=>array('index')),
	array('label'=>'Manage MasterClass', 'url'=>array('admin')),
);
?>

<h1>Create MasterClass</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>