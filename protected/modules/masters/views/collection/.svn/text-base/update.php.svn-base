<?php
/* @var $this CollectionController */
/* @var $model Mastercollection */

$this->breadcrumbs=array(
	'Mastercollections'=>array('index'),
	$model->MasterCollectionId=>array('view','id'=>$model->MasterCollectionId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mastercollection', 'url'=>array('index')),
	array('label'=>'Create Mastercollection', 'url'=>array('create')),
	array('label'=>'View Mastercollection', 'url'=>array('view', 'id'=>$model->MasterCollectionId)),
	array('label'=>'Manage Mastercollection', 'url'=>array('admin')),
);
?>

<h1>Update Mastercollection <?php echo $model->MasterCollectionId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>