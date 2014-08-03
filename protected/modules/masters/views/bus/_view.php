<?php
/* @var $this BusController */
/* @var $data Bus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BusId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BusId), array('view', 'id'=>$data->BusId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstituteId')); ?>:</b>
	<?php echo CHtml::encode($data->InstituteId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BusName')); ?>:</b>
	<?php echo CHtml::encode($data->BusName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BusNumber')); ?>:</b>
	<?php echo CHtml::encode($data->BusNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Capacity')); ?>:</b>
	<?php echo CHtml::encode($data->Capacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SortOrder')); ?>:</b>
	<?php echo CHtml::encode($data->SortOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />

	*/ ?>

</div>