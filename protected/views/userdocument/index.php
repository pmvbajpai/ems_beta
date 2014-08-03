<?php
/* @var $this UserdocumentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Userdocuments',
);

$this->menu=array(
	array('label'=>'Create Userdocument', 'url'=>array('create')),
	array('label'=>'Manage Userdocument', 'url'=>array('admin')),
);
?>

<h1>Userdocuments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
