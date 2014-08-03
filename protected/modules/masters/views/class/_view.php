<?php
/* @var $this ClassController */
/* @var $data MasterClass */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClassId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ClassId), array('view', 'id'=>$data->ClassId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClassName')); ?>:</b>
	<?php echo CHtml::encode($data->ClassName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ClassDisplayName')); ?>:</b>
	<?php echo CHtml::encode($data->ClassDisplayName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SortOrder')); ?>:</b>
	<?php echo CHtml::encode($data->SortOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />


</div>