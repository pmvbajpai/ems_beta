<?php
/* @var $this EmployeedetailsController */
/* @var $model Employeedetails */

$this->breadcrumbs=array(
	'Employeedetails'=>array('index'),
	$model->EmployeeDetailId=>array('view','id'=>$model->EmployeeDetailId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employeedetails', 'url'=>array('index')),
	array('label'=>'Create Employeedetails', 'url'=>array('create')),
	array('label'=>'View Employeedetails', 'url'=>array('view', 'id'=>$model->EmployeeDetailId)),
	array('label'=>'Manage Employeedetails', 'url'=>array('admin')),
);
?>

<h1>Update Employeedetails <?php echo $model->EmployeeDetailId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>