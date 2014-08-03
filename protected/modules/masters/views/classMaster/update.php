<?php
/* @var $this ClassMasterController */
/* @var $model Classsectionassociation */

$this->breadcrumbs=array(
	'Classsectionassociations'=>array('index'),
	$model->ClassSectionAssociationId=>array('view','id'=>$model->ClassSectionAssociationId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Classsectionassociation', 'url'=>array('index')),
	array('label'=>'Create Classsectionassociation', 'url'=>array('create')),
	array('label'=>'View Classsectionassociation', 'url'=>array('view', 'id'=>$model->ClassSectionAssociationId)),
	array('label'=>'Manage Classsectionassociation', 'url'=>array('admin')),
);
?>

<h1>Update Classsectionassociation <?php echo $model->ClassSectionAssociationId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>