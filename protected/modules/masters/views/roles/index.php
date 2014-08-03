<?php
/* @var $this RolesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roles',
);

?>

<h1>Roles</h1>

<!-- <div id="form_container"> -->
	<?php //$this->renderPartial('_form', array('model'=>$model)); ?>
<!-- </div> -->

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RoleName',
		array(
			'class'=>'CButtonColumn',
			'template'=>'',
			/* 'template'=>'{configure} {update} {delete}',
			'buttons'=>array (
				'configure' => array (
					'label'=>'Assign resources',
					'imageUrl'=>Yii::app()->request->baseUrl.'/images/access.png',
					'url'=>'Yii::app()->createUrl("masters/rolesresources", array("RoleId"=>$data->RoleId))',
				),
			), */
		),
	),
)); ?>