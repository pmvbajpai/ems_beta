<?php
/* @var $this AnnouncementsController */
/* @var $model Announcements */

$this->breadcrumbs=array(
	'Announcements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Announcements', 'url'=>array('index')),
	array('label'=>'Manage Announcements', 'url'=>array('admin')),
);
?>
<div id="form_container">
<h1>Announcements</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'announcements-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Heading',
		'Description',
		'ExpiryDate',		
		'AnnouncementType',
		/*
		'DateCreated',
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
