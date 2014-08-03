<?php
/* @var $this ExammasterController */
/* @var $model Exammaster */

$this->breadcrumbs=array(
	'Exammasters'=>array('index'),
	$model->ExamId=>array('view','id'=>$model->ExamId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Exammaster', 'url'=>array('index')),
	array('label'=>'Create Exammaster', 'url'=>array('create')),
	array('label'=>'View Exammaster', 'url'=>array('view', 'id'=>$model->ExamId)),
	array('label'=>'Manage Exammaster', 'url'=>array('admin')),
);
?>

<h1>Update Exammaster <?php echo $model->ExamId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>