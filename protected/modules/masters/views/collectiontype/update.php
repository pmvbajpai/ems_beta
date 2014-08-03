<?php
/* @var $this CollectiontypeController */
/* @var $model Mastercollectiontype */

$this->breadcrumbs=array(
	'Mastercollectiontypes'=>array('index'),
	$model->MasterCollectionTypeId=>array('view','id'=>$model->MasterCollectionTypeId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mastercollectiontype', 'url'=>array('index')),
	array('label'=>'Create Mastercollectiontype', 'url'=>array('create')),
	array('label'=>'View Mastercollectiontype', 'url'=>array('view', 'id'=>$model->MasterCollectionTypeId)),
	array('label'=>'Manage Mastercollectiontype', 'url'=>array('admin')),
);
?>

<h1>Update Mastercollectiontype <?php echo $model->MasterCollectionTypeId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>