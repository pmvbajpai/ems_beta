<?php
/* @var $this ClassController */
/* @var $model MasterClass */

$this->breadcrumbs=array(
	'Master Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterClass', 'url'=>array('index')),
	array('label'=>'Manage MasterClass', 'url'=>array('admin')),
);
?>

<div id="form_container">
	<h1>Create MasterClass</h1>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'master-class-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'ClassName',
		'ClassDisplayName',
		'Status',
		
		/*
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
