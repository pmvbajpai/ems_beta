<?php
/* @var $this EmployeedetailsController */
/* @var $model Employeedetails */

$this->breadcrumbs=array(
	'Employeedetails'=>array('index'),
	$model->EmployeeDetailId,
);

$this->menu=array(
	array('label'=>'List Employeedetails', 'url'=>array('index')),
	array('label'=>'Create Employeedetails', 'url'=>array('create')),
	array('label'=>'Update Employeedetails', 'url'=>array('update', 'id'=>$model->EmployeeDetailId)),
	array('label'=>'Delete Employeedetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EmployeeDetailId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employeedetails', 'url'=>array('admin')),
);
?>

<h1>View Employeedetails #<?php echo $model->EmployeeDetailId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EmployeeDetailId',
		'UserId',
		'DOB',
		'EmployeeType',
		'Department',
		'Gender',
		'Religion',
		'Category',
		'CurrentAddress1',
		'CurrentAddress2',
		'CurrentSuburbId',
		'CurrentCityId',
		'CurrentZipcode',
		'CurrentStateId',
		'CurrentCountryId',
		'PermaAddress1',
		'PermaAddress2',
		'PermaSuburbId',
		'PermaCityId',
		'PermaStateId',
		'PermaCountryId',
		'PermaZipcode',
		'Mobile1',
		'Mobile2',
		'Phone1',
		'Phone2',
		'Fax1',
		'Fax2',
		'Email1',
		'Email2',
		'PassportNum',
		'DateofJoining',
		'Status',
		'Remarks',
		'AdmissionRef',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
