<?php
/* @var $this UserparentController */
/* @var $model UserParent */

$this->breadcrumbs=array(
	'User Parents'=>array('index'),
	$model->ParentId,
);

$this->menu=array(
	array('label'=>'List UserParent', 'url'=>array('index')),
	array('label'=>'Create UserParent', 'url'=>array('create')),
	array('label'=>'Update UserParent', 'url'=>array('update', 'id'=>$model->ParentId)),
	array('label'=>'Delete UserParent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ParentId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserParent', 'url'=>array('admin')),
);
?>

<h1>View UserParent #<?php echo $model->ParentId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ParentId',
		'FirstName',
		'MiddleName',
		'LastName',
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
		'Status',
		'QualificationId',
		'Occupation',
		'Income',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
