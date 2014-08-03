<?php
/* @var $this AcademicsessionController */
/* @var $data Academicsession */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcademicSessionId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AcademicSessionId), array('view', 'id'=>$data->AcademicSessionId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SessionName')); ?>:</b>
	<?php echo CHtml::encode($data->SessionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SessionStartDate')); ?>:</b>
	<?php echo CHtml::encode($data->SessionStartDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SessionEndDate')); ?>:</b>
	<?php echo CHtml::encode($data->SessionEndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SortOrder')); ?>:</b>
	<?php echo CHtml::encode($data->SortOrder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
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