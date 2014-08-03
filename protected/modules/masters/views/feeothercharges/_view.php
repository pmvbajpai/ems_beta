<?php
/* @var $this FeeotherchargesController */
/* @var $data Feeothercharges */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FeeOtherChargesId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FeeOtherChargesId), array('view', 'id'=>$data->FeeOtherChargesId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstituteId')); ?>:</b>
	<?php echo CHtml::encode($data->InstituteId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcademicSessionId')); ?>:</b>
	<?php echo CHtml::encode($data->AcademicSessionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OtherComponentName')); ?>:</b>
	<?php echo CHtml::encode($data->OtherComponentName); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />

	*/ ?>

</div>