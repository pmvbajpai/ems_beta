<?php
/* @var $this ExamstructureController */
/* @var $model Examstructure */

$this->breadcrumbs=array(
	'Examstructures'=>array('index'),
	$model->ExamStructureId=>array('view','id'=>$model->ExamStructureId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examstructure', 'url'=>array('index')),
	array('label'=>'Create Examstructure', 'url'=>array('create')),
	array('label'=>'View Examstructure', 'url'=>array('view', 'id'=>$model->ExamStructureId)),
	array('label'=>'Manage Examstructure', 'url'=>array('admin')),
);
?>

<h1>Update Examstructure <?php echo $model->ExamStructureId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>