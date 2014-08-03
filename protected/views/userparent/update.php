<?php
/* @var $this UserparentController */
/* @var $model UserParent */

$this->breadcrumbs=array(
	'User Parents'=>array('index'),
	$model->ParentId=>array('view','id'=>$model->ParentId),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserParent', 'url'=>array('index')),
	array('label'=>'Create UserParent', 'url'=>array('create')),
	array('label'=>'View UserParent', 'url'=>array('view', 'id'=>$model->ParentId)),
	array('label'=>'Manage UserParent', 'url'=>array('admin')),
);
?>

<h1>Update UserParent <?php echo $model->ParentId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>