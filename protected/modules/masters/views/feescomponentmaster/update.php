<?php
/* @var $this FeescomponentmasterController */
/* @var $model Feescomponentmaster */

$this->breadcrumbs=array(
	'Feescomponentmasters'=>array('index'),
	$model->ComponentId=>array('view','id'=>$model->ComponentId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feescomponentmaster', 'url'=>array('index')),
	array('label'=>'Create Feescomponentmaster', 'url'=>array('create')),
	array('label'=>'View Feescomponentmaster', 'url'=>array('view', 'id'=>$model->ComponentId)),
	array('label'=>'Manage Feescomponentmaster', 'url'=>array('admin')),
);
?>

<h1>Update Feescomponentmaster <?php echo $model->ComponentId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>