<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Academicsession', 'url'=>array('index')),
	array('label'=>'Manage Academicsession', 'url'=>array('admin')),
);
?>

<div id="form_container">
	<h1>Create Academicsession</h1>
	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'academicsession-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SessionName',
		'SessionStartDate',
		'SessionEndDate',
		'SortOrder',
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
		/*
		'DateCreated',
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


