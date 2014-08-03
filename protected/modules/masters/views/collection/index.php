<?php
/* @var $this CollectionController */
/* @var $model Mastercollection */

$this->breadcrumbs=array(
	'collections'=>array('index'),
	
);

$this->menu=array(
	array('label'=>'List Mastercollection', 'url'=>array('index')),
	array('label'=>'Manage Mastercollection', 'url'=>array('admin')),
);

?>

<div id="form_container">
	<h1>Create Mastercollection</h1>
	
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mastercollection-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'masterCollectionType.MasterCollectionType',
		'CollectionName',
		'Description',
		array(
				'name'  => 'Status',
				'header' => 'Status',
				'value' => ' ($data->Status) == 1 ? "Acitve" : "Inactive"',
			),
		/*'DateCreated',
		
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

