<?php
/* @var $this SubjectcomponentController */
/* @var $model Subjectcomponent */

$this->breadcrumbs=array(
	'Subjectcomponents'=>array('index'),
	$model->SubjectComponentId,
);

$this->menu=array(
	array('label'=>'List Subjectcomponent', 'url'=>array('index')),
	array('label'=>'Create Subjectcomponent', 'url'=>array('create')),
	array('label'=>'Update Subjectcomponent', 'url'=>array('update', 'id'=>$model->SubjectComponentId)),
	array('label'=>'Delete Subjectcomponent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SubjectComponentId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subjectcomponent', 'url'=>array('admin')),
);
?>

<h1>View Subjectcomponent #<?php echo $model->SubjectComponentId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SubjectComponentId',
		'InstituteId',
		'ComponentName',
		'ComponentDisplayName',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
