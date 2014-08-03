<?php
/* @var $this UserparentController */
/* @var $data UserParent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParentId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ParentId), array('view', 'id'=>$data->ParentId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MiddleName')); ?>:</b>
	<?php echo CHtml::encode($data->MiddleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gender')); ?>:</b>
	<?php echo CHtml::encode($data->Gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Religion')); ?>:</b>
	<?php echo CHtml::encode($data->Religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Category')); ?>:</b>
	<?php echo CHtml::encode($data->Category); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentAddress1')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentAddress1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentAddress2')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentAddress2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentSuburbId')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentSuburbId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentCityId')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentCityId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentZipcode')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentZipcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentStateId')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentStateId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrentCountryId')); ?>:</b>
	<?php echo CHtml::encode($data->CurrentCountryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaAddress1')); ?>:</b>
	<?php echo CHtml::encode($data->PermaAddress1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaAddress2')); ?>:</b>
	<?php echo CHtml::encode($data->PermaAddress2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaSuburbId')); ?>:</b>
	<?php echo CHtml::encode($data->PermaSuburbId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaCityId')); ?>:</b>
	<?php echo CHtml::encode($data->PermaCityId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaStateId')); ?>:</b>
	<?php echo CHtml::encode($data->PermaStateId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaCountryId')); ?>:</b>
	<?php echo CHtml::encode($data->PermaCountryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PermaZipcode')); ?>:</b>
	<?php echo CHtml::encode($data->PermaZipcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mobile1')); ?>:</b>
	<?php echo CHtml::encode($data->Mobile1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mobile2')); ?>:</b>
	<?php echo CHtml::encode($data->Mobile2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone1')); ?>:</b>
	<?php echo CHtml::encode($data->Phone1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone2')); ?>:</b>
	<?php echo CHtml::encode($data->Phone2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fax1')); ?>:</b>
	<?php echo CHtml::encode($data->Fax1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fax2')); ?>:</b>
	<?php echo CHtml::encode($data->Fax2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email1')); ?>:</b>
	<?php echo CHtml::encode($data->Email1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email2')); ?>:</b>
	<?php echo CHtml::encode($data->Email2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QualificationId')); ?>:</b>
	<?php echo CHtml::encode($data->QualificationId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Occupation')); ?>:</b>
	<?php echo CHtml::encode($data->Occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Income')); ?>:</b>
	<?php echo CHtml::encode($data->Income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />

	*/ ?>

</div>