<?php
/* @var $this AnnouncementsController */
/* @var $data Announcements */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AnnouncementId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AnnouncementId), array('view', 'id'=>$data->AnnouncementId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstituteId')); ?>:</b>
	<?php echo CHtml::encode($data->InstituteId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcademicSessionId')); ?>:</b>
	<?php echo CHtml::encode($data->AcademicSessionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Heading')); ?>:</b>
	<?php echo CHtml::encode($data->Heading); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExpiryDaye')); ?>:</b>
	<?php echo CHtml::encode($data->ExpiryDaye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AnnouncementType')); ?>:</b>
	<?php echo CHtml::encode($data->AnnouncementType); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />

	*/ ?>

</div>