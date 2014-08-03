<?php
/* @var $this CollectionController */
/* @var $data Mastercollection */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MasterCollectionId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MasterCollectionId), array('view', 'id'=>$data->MasterCollectionId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MasterCollectionTypeId')); ?>:</b>
	<?php echo CHtml::encode($data->MasterCollectionTypeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CollectionName')); ?>:</b>
	<?php echo CHtml::encode($data->CollectionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />


</div>