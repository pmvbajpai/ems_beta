<?php
/* @var $this ExammasterController */
/* @var $model Exammaster */

$this->breadcrumbs=array(
	'Exammasters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Exammaster', 'url'=>array('index')),
	array('label'=>'Manage Exammaster', 'url'=>array('admin')),
);
?>

<h1>Create Exammaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>