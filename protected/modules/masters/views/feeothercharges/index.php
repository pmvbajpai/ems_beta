<?php
/* @var $this FeeotherchargesController */
/* @var $model Feeothercharges */

$this->breadcrumbs=array(
	'Feeothercharges'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feeothercharges', 'url'=>array('index')),
	array('label'=>'Manage Feeothercharges', 'url'=>array('admin')),
);
?>
<div id="form_container">
<h1>Create Feeothercharges</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'feeothercharges-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'FeeOtherChargesId',
		//'InstituteId',
		//'AcademicSessionId',
		'OtherComponentName',
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
