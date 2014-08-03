<?php
/* @var $this InstituteController */
/* @var $model Institute */

$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Institute', 'url'=>array('index')),
	array('label'=>'Manage Institute', 'url'=>array('admin')),
);
?>

<div id="form_container">
	<h1>Create Institute</h1>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'institute-grid',
	'dataProvider'=>$listingModel->search(),
	'filter'=>$listingModel,
	'columns'=>array(
		//'InstituteId',
		'InstituteName',
		'InstituteLogo',
		//'InstituteAddress1',
		//'InstituteAddress2',
		//'InstituteZipCode',
		/*
		'InstituteCityId',
		'InstituteStateId',
		'InstituteCountryId',
		'InstitutePhone1',
		'InstitutePhone2',
		'InsituteFax1',
		'InstituteFax2',
		'InstituteEmail1',
		'InstituteEmail2',
		'InsituteWebUrl',
		'InstituteDescription',
		'InstituteAccreditionId',
		'DateCreated',
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


