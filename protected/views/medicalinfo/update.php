<?php
/* @var $this MedicalinfoController */
/* @var $model Medicalinfo */

$this->breadcrumbs=array(
	'Medicalinfos'=>array('index'),
	$model->MedicalInfoId=>array('view','id'=>$model->MedicalInfoId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medicalinfo', 'url'=>array('index')),
	array('label'=>'Create Medicalinfo', 'url'=>array('create')),
	array('label'=>'View Medicalinfo', 'url'=>array('view', 'id'=>$model->MedicalInfoId)),
	array('label'=>'Manage Medicalinfo', 'url'=>array('admin')),
);
?>

<h1>Update Medicalinfo <?php echo $model->MedicalInfoId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>