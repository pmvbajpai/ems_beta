<?php
/* @var $this SubjectcomponentController */
/* @var $model Subjectcomponent */

$this->breadcrumbs=array(
	'Subjectcomponents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subjectcomponent', 'url'=>array('index')),
	array('label'=>'Manage Subjectcomponent', 'url'=>array('admin')),
);
?>

<h1>Create Subjectcomponent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>