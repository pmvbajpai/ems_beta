<?php
/* @var $this ClassController */
/* @var $model MasterClass */

$this->breadcrumbs=array(
	'Master Classes'=>array('index'),
	$model->ClassId,
);

$this->menu=array(
	array('label'=>'List MasterClass', 'url'=>array('index')),
	array('label'=>'Create MasterClass', 'url'=>array('create')),
	array('label'=>'Update MasterClass', 'url'=>array('update', 'id'=>$model->ClassId)),
	array('label'=>'Delete MasterClass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ClassId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterClass', 'url'=>array('admin')),
);
?>

<h1>View MasterClass #<?php echo $model->ClassId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ClassId',
		'ClassName',
		'ClassDisplayName',
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
