<?php
/* @var $this BusController */
/* @var $model Bus */

$this->breadcrumbs=array(
	'Buses'=>array('index'),
	$model->BusId=>array('view','id'=>$model->BusId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bus', 'url'=>array('index')),
	array('label'=>'Create Bus', 'url'=>array('create')),
	array('label'=>'View Bus', 'url'=>array('view', 'id'=>$model->BusId)),
	array('label'=>'Manage Bus', 'url'=>array('admin')),
);
?>

<h1>Update Bus <?php echo $model->BusId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>