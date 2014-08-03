<?php
/* @var $this RolesResourcesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roles Resources',
);

?>

<h1>Roles Resources</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'roles-resources-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RoleId',
		'ResourceId',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>