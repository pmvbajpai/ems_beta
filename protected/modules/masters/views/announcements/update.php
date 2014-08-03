<?php
/* @var $this AnnouncementsController */
/* @var $model Announcements */

$this->breadcrumbs=array(
	'Announcements'=>array('index'),
	$model->AnnouncementId=>array('view','id'=>$model->AnnouncementId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Announcements', 'url'=>array('index')),
	array('label'=>'Create Announcements', 'url'=>array('create')),
	array('label'=>'View Announcements', 'url'=>array('view', 'id'=>$model->AnnouncementId)),
	array('label'=>'Manage Announcements', 'url'=>array('admin')),
);
?>

<h1>Update Announcements <?php echo $model->AnnouncementId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>