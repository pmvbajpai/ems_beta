<?php
/* @var $this MedicalinfoController */
/* @var $model Medicalinfo */

$this->breadcrumbs=array(
	'Medicalinfos'=>array('index'),
	$model->MedicalInfoId,
);

$this->menu=array(
	array('label'=>'List Medicalinfo', 'url'=>array('index')),
	array('label'=>'Create Medicalinfo', 'url'=>array('create')),
	array('label'=>'Update Medicalinfo', 'url'=>array('update', 'id'=>$model->MedicalInfoId)),
	array('label'=>'Delete Medicalinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MedicalInfoId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medicalinfo', 'url'=>array('admin')),
);
?>

<h1>View Medicalinfo #<?php echo $model->MedicalInfoId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MedicalInfoId',
		'UserId',
		'MedicalHistory',
		'RegularDocName',
		'RegularDocAddress',
		'RegularDocMobile',
		'RegularDocPhone',
		'RegularDocEmail',
		'RegularHospName',
		'RegularHospPhone',
		'RegularHospEmail',
		'RegularHospAddress',
		'Height',
		'weight',
		'BloodGroup',
		'LeftEyeSight',
		'RightEyeSight',
		'IdentificationMark1',
		'IdentificationMark2',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
