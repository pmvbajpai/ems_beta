<?php
/* @var $this RolesResourcesController */
/* @var $data RolesResources */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RolesResourcesId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RolesResourcesId), array('view', 'id'=>$data->RolesResourcesId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RoleId')); ?>:</b>
	<?php echo CHtml::encode($data->RoleId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ResourceId')); ?>:</b>
	<?php echo CHtml::encode($data->ResourceId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />


</div>