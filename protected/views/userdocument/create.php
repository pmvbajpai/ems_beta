<?php
/* @var $this UserdocumentController */
/* @var $model Userdocument */

$this->breadcrumbs=array(
	'Userdocuments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Userdocument', 'url'=>array('index')),
	array('label'=>'Manage Userdocument', 'url'=>array('admin')),
);
?>

<h1>Create Userdocument</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>