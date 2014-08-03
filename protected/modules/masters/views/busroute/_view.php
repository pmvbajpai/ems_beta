<?php
/* @var $this BusrouteController */
/* @var $data Busroute */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BusRouteId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BusRouteId), array('view', 'id'=>$data->BusRouteId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstituteId')); ?>:</b>
	<?php echo CHtml::encode($data->InstituteId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AcademicSessionId')); ?>:</b>
	<?php echo CHtml::encode($data->AcademicSessionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RouteName')); ?>:</b>
	<?php echo CHtml::encode($data->RouteName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BusId')); ?>:</b>
	<?php echo CHtml::encode($data->BusId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SortOrder')); ?>:</b>
	<?php echo CHtml::encode($data->SortOrder); ?>
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