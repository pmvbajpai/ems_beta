<?php
/* @var $this ExammasterController */
/* @var $data Exammaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExamId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ExamId), array('view', 'id'=>$data->ExamId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExamName')); ?>:</b>
	<?php echo CHtml::encode($data->ExamName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExamStartDate')); ?>:</b>
	<?php echo CHtml::encode($data->ExamStartDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExamEndDate')); ?>:</b>
	<?php echo CHtml::encode($data->ExamEndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcademicSessionId')); ?>:</b>
	<?php echo CHtml::encode($data->AcademicSessionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstituteId')); ?>:</b>
	<?php echo CHtml::encode($data->InstituteId); ?>
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