<?php
/* @var $this SectionController */
/* @var $model Section */

$this->breadcrumbs=array(
	'Sections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Section', 'url'=>array('index')),
	array('label'=>'Manage Section', 'url'=>array('admin')),
);
?>

<div id="form_container">
	<h1>Create Section</h1>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'section-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'SectionName',
		'Status',
		
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
