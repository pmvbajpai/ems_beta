<?php
/* @var $this CollectiontypeController */
/* @var $model Mastercollectiontype */

$this->breadcrumbs=array(
	'Mastercollectiontypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mastercollectiontype', 'url'=>array('index')),
	array('label'=>'Manage Mastercollectiontype', 'url'=>array('admin')),
);

?>
<div id="form_container">
	<h1>Create Collection Type</h1>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mastercollectiontype-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'MasterCollectionType',
		array(
				'header' => 'Status',
				'value' => ' ($data->Status) == 1 ? "Acitve" : "Inactive"',
			),
		/*'DateCreated',
		'DateUpdated',*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
