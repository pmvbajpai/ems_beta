<?php
/* @var $this ClassController */
/* @var $model MasterClass */

$this->breadcrumbs=array(
	'Master Classes'=>array('index'),
	$model->ClassId=>array('view','id'=>$model->ClassId),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterClass', 'url'=>array('index')),
	array('label'=>'Create MasterClass', 'url'=>array('create')),
	array('label'=>'View MasterClass', 'url'=>array('view', 'id'=>$model->ClassId)),
	array('label'=>'Manage MasterClass', 'url'=>array('admin')),
);
?>

<h1>Update MasterClass <?php echo $model->ClassId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>