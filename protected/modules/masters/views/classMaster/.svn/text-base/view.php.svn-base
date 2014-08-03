<?php
/* @var $this ClassMasterController */
/* @var $model Classsectionassociation */

$this->breadcrumbs=array(
	'Classsectionassociations'=>array('index'),
	$model->ClassSectionAssociationId,
);

$this->menu=array(
	array('label'=>'List Classsectionassociation', 'url'=>array('index')),
	array('label'=>'Create Classsectionassociation', 'url'=>array('create')),
	array('label'=>'Update Classsectionassociation', 'url'=>array('update', 'id'=>$model->ClassSectionAssociationId)),
	array('label'=>'Delete Classsectionassociation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ClassSectionAssociationId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classsectionassociation', 'url'=>array('admin')),
);
?>

<h1>View Classsectionassociation #<?php echo $model->ClassSectionAssociationId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ClassSectionAssociationId',
		'ClassId',
		'SectionId',
		'InsituteId',
		'AcademicSessionId',
		'Status',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
