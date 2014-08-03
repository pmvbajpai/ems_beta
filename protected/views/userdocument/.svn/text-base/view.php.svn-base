<?php
/* @var $this UserdocumentController */
/* @var $model Userdocument */

$this->breadcrumbs=array(
	'Userdocuments'=>array('index'),
	$model->DocumentId,
);

$this->menu=array(
	array('label'=>'List Userdocument', 'url'=>array('index')),
	array('label'=>'Create Userdocument', 'url'=>array('create')),
	array('label'=>'Update Userdocument', 'url'=>array('update', 'id'=>$model->DocumentId)),
	array('label'=>'Delete Userdocument', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DocumentId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userdocument', 'url'=>array('admin')),
);
?>

<h1>View Userdocument #<?php echo $model->DocumentId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DocumentId',
		'UserId',
		'DocumentType',
		'FileName',
		'Comments',
		'Status',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
