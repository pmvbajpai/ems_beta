<?php
/* @var $this DefaultController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Institutes',
);

$this->menu=array(
	array('label'=>'Create Institute', 'url'=>array('create')),
	array('label'=>'Manage Institute', 'url'=>array('admin')),
);
?>

<h1>Institutes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
