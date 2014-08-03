<?php
/* @var $this SubjectcomponentController */
/* @var $model Subjectcomponent */

$this->breadcrumbs=array(
	'Subjectcomponents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subjectcomponent', 'url'=>array('index')),
	array('label'=>'Manage Subjectcomponent', 'url'=>array('admin')),
);
?>
<div id="form_container">
<h1>Create Subjectcomponent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subjectcomponent-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'SubjectComponentId',
		//'InstituteId',
		'ComponentName',
		'ComponentDisplayName',
		array(
		'name'=>'Status',
		'filter'=>array('1'=>'Active', '0'=>'Inactive'),
		'type'=>'html',
		'value'=>'CHtml::tag("div", array(
            "style"=>"text-align: center",
        ),
        CHtml::tag("img", array(
            "title"=>UtilityHtml::getImagetitle(GxHtml::valueEx($data, "Status")),
            "src"=>UtilityHtml::getStatusImage(GxHtml::valueEx($data, "Status")),
        ))
    )',
		'htmlOptions'=>array('width'=>"80px")
),
		'SortOrder',
		/*
		'DateCreated',
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
