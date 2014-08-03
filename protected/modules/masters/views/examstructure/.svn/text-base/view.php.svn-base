<?php
/* @var $this ExamstructureController */
/* @var $model Examstructure */

$this->breadcrumbs=array(
	'Examstructures'=>array('index'),
	$model->ExamStructureId,
);

$this->menu=array(
	array('label'=>'List Examstructure', 'url'=>array('index')),
	array('label'=>'Create Examstructure', 'url'=>array('create')),
	array('label'=>'Update Examstructure', 'url'=>array('update', 'id'=>$model->ExamStructureId)),
	array('label'=>'Delete Examstructure', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ExamStructureId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examstructure', 'url'=>array('admin')),
);
?>

<h1>View Examstructure #<?php echo $model->ExamStructureId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ExamStructureId',
		'ClassSectionExamAssociationId',
		'SubjectId',
		'ComponentId',
		'MaxMarks',
		'Status',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
