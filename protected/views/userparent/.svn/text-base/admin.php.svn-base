<?php
/* @var $this UserparentController */
/* @var $model UserParent */

$this->breadcrumbs=array(
	'User Parents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserParent', 'url'=>array('index')),
	array('label'=>'Create UserParent', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-parent-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Parents</h1>

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
	'id'=>'user-parent-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ParentId',
		'FirstName',
		'MiddleName',
		'LastName',
		'Gender',
		'Religion',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
