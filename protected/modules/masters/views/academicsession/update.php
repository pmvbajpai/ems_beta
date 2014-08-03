<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	$model->AcademicSessionId=>array('view','id'=>$model->AcademicSessionId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Academicsession', 'url'=>array('index')),
	array('label'=>'Create Academicsession', 'url'=>array('create')),
	array('label'=>'View Academicsession', 'url'=>array('view', 'id'=>$model->AcademicSessionId)),
	array('label'=>'Manage Academicsession', 'url'=>array('admin')),
);
?>

<h1>Update Academicsession <?php echo $model->AcademicSessionId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>