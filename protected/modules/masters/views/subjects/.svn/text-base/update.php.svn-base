<?php
/* @var $this SubjectsController */
/* @var $model Subjects */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	$model->SubjectId=>array('view','id'=>$model->SubjectId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subjects', 'url'=>array('index')),
	array('label'=>'Create Subjects', 'url'=>array('create')),
	array('label'=>'View Subjects', 'url'=>array('view', 'id'=>$model->SubjectId)),
	array('label'=>'Manage Subjects', 'url'=>array('admin')),
);
?>

<h1>Update Subjects <?php echo $model->SubjectId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>