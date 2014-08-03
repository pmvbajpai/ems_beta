<?php
/* @var $this ExammasterController */
/* @var $model Exammaster */

$this->breadcrumbs=array(
	'Exammasters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Exammaster', 'url'=>array('index')),
	array('label'=>'Manage Exammaster', 'url'=>array('admin')),
);
?>

<div id="form_container">
	<h1>Create Exammaster</h1>	
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'exammaster-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ExamId',
		'ExamName',
		'ExamStartDate',
		'ExamEndDate',
		'AcademicSessionId',
		'InstituteId',
		/*
		'Status',
		'SortOrder',
		'DateCreated',
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>