<?php
/* @var $this InstituteController */
/* @var $model Institute */

$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	$model->InstituteId=>array('view','id'=>$model->InstituteId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Institute', 'url'=>array('index')),
	array('label'=>'Create Institute', 'url'=>array('create')),
	array('label'=>'View Institute', 'url'=>array('view', 'id'=>$model->InstituteId)),
	array('label'=>'Manage Institute', 'url'=>array('admin')),
);
?>

<h1>Update Institute <?php echo $model->InstituteId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>