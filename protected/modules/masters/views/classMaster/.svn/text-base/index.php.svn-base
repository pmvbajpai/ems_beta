<?php
/* @var $this ClassMasterController */
/* @var $model Classsectionassociation */

$this->breadcrumbs=array(
	'Classsectionassociations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classsectionassociation', 'url'=>array('index')),
	array('label'=>'Manage Classsectionassociation', 'url'=>array('admin')),
);
?>

<div id="form_wrapper">
	<h1>Create Classsectionassociation</h1>
	<?php $this->renderPartial('_form', array('model'=>$model, 'examMaster'=>$examMaster,'classSubject'=>$classSubject,)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'classsectionassociation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'classmaster.ClassName',
		'section.SectionName',
		'insitute.InstituteName',
		'academicSession.SessionName',
		array
		(
			'name' 	 =>	'Status',
			'header' =>'Status',
			 'value' => '($data->Status) == 1 ? "Active" : "Inactive"'
		),
		/*
		'DateCreated',
		'DateUpdated',
		*/
		array
		(
		    'class'=>'CButtonColumn',
		    'template'=>'{delete}',
		   
		),
		
	),
)); ?>
