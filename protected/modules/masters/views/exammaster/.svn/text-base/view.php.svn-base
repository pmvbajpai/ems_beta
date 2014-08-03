<?php
/* @var $this ExammasterController */
/* @var $model Exammaster */

$this->breadcrumbs=array(
	'Exammasters'=>array('index'),
	$model->ExamId,
);

$this->menu=array(
	array('label'=>'List Exammaster', 'url'=>array('index')),
	array('label'=>'Create Exammaster', 'url'=>array('create')),
	array('label'=>'Update Exammaster', 'url'=>array('update', 'id'=>$model->ExamId)),
	array('label'=>'Delete Exammaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ExamId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Exammaster', 'url'=>array('admin')),
);
?>

<h1>View Exammaster #<?php echo $model->ExamId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ExamId',
		'ExamName',
		'ExamStartDate',
		'ExamEndDate',
		'AcademicSessionId',
		'InstituteId',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
