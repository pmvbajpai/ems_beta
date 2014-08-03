<?php
/* @var $this InstituteController */
/* @var $model Institute */

$this->breadcrumbs=array(
	'Institutes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Institute', 'url'=>array('index')),
	array('label'=>'Create Institute', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#institute-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Institutes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'institute-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'InstituteId',
		'InstituteName',
		'InstituteLogo',
		'InstituteAddress1',
		'InstituteAddress2',
		'InstituteZipCode',
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
