<?php
/* @var $this BusrouteController */
/* @var $model Busroute */

$this->breadcrumbs=array(
	'Busroutes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Busroute', 'url'=>array('index')),
	array('label'=>'Manage Busroute', 'url'=>array('admin')),
);
?>
<div id="form_container">
<h1>Create Busroute</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'pickupPoint' => $pickupPoint)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'busroute-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'BusRouteId',
		//'institute.InstituteName',
		//'academicSession.SessionName',
		'RouteName',
		//'BusId',
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
		'SortOrder',
		'DateCreated',
		'DateUpdated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
