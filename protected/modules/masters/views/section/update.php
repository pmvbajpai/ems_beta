<?php
/* @var $this SectionController */
/* @var $model Section */

$this->breadcrumbs=array(
	'Sections'=>array('index'),
	$model->SectionId=>array('view','id'=>$model->SectionId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Section', 'url'=>array('index')),
	array('label'=>'Create Section', 'url'=>array('create')),
	array('label'=>'View Section', 'url'=>array('view', 'id'=>$model->SectionId)),
	array('label'=>'Manage Section', 'url'=>array('admin')),
);
?>

<h1>Update Section <?php echo $model->SectionId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>