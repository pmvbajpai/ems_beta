<?php
/* @var $this AnnouncementsController */
/* @var $model Announcements */

$this->breadcrumbs=array(
	'Announcements'=>array('index'),
	$model->AnnouncementId,
);

$this->menu=array(
	array('label'=>'List Announcements', 'url'=>array('index')),
	array('label'=>'Create Announcements', 'url'=>array('create')),
	array('label'=>'Update Announcements', 'url'=>array('update', 'id'=>$model->AnnouncementId)),
	array('label'=>'Delete Announcements', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AnnouncementId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Announcements', 'url'=>array('admin')),
);
?>

<h1>View Announcements #<?php echo $model->AnnouncementId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AnnouncementId',
		'InstituteId',
		'AcademicSessionId',
		'Heading',
		'Description',
		'ExpiryDaye',
		'AnnouncementType',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
