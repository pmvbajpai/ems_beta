<?php
/* @var $this PickuppointController */
/* @var $model Pickuppoint */

$this->breadcrumbs=array(
	'Pickuppoints'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pickuppoint', 'url'=>array('index')),
	array('label'=>'Manage Pickuppoint', 'url'=>array('admin')),
);
?>
<div id="form_container">
<h1>Create Pickuppoint</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pickuppoint-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'PickupPointId',
		'institute.InstituteName',
		'PickupPointName',
		'Amount',
		//'ZipCode',
		'Remarks',
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
