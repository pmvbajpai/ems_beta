<?php
/* @var $this UserparentController */
/* @var $model UserParent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-parent-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnChange'=>true,
		'validateOnSubmit'=>true,
	)
)); 
?>

	<?php
		$gender = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::GENDER);
		$religion = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::RELIGION);
		$reservedCategory = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::RESERVE_CATEGORY);
		$relations = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::RELATIONS);
	?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<div class="row">
		<?php echo $form->labelEx($userRelation,'RelationId'); ?>
		<?php echo $form->dropDownList($userRelation, 'RelationId',array(''=> 'Select Type') + CHtml::listData($relations, 'id', 'name')); ?>
		<?php echo $form->error($userRelation,'RelationId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userDetails,'UserId'); ?>
		<?php echo $form->textField($userDetails,'UserId',array('size'=>25,'maxlength'=>25, 'value' => '29')); ?>
		<?php echo $form->error($userDetails,'UserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MiddleName'); ?>
		<?php echo $form->textField($model,'MiddleName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MiddleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gender'); ?>
		<?php echo $form->radioButtonList($model,'Gender', CHtml::listData($gender, 'id', 'name'),
											array('labelOptions'=>array('style'=>'display:inline'), 'separator' => "&nbsp;")
										); ?>
		<?php echo $form->error($model,'Gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Religion'); ?>
		<?php echo $form->dropDownList($model,'Religion', CHtml::listData($religion, 'id', 'name')); ?>
		<?php echo $form->error($model,'Religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->dropDownList($model,'Category', CHtml::listData($reservedCategory, 'id', 'name')); ?>
		<?php echo $form->error($model,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentAddress1'); ?>
		<?php echo $form->textField($model,'CurrentAddress1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CurrentAddress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentAddress2'); ?>
		<?php echo $form->textField($model,'CurrentAddress2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CurrentAddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentSuburbId'); ?>
		<?php echo $form->dropDownList($model, 'CurrentSuburbId',array(''=> 'Select Type') + CHtml::listData(Pickuppoint::model()->findAll(), 'PickupPointId', 'PickupPointName')); ?>
		<?php echo $form->error($model,'CurrentSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentCityId'); ?>
		<?php echo $form->dropDownList($model,'CurrentCityId',CHtml::listData(City::model()->findAll(), 'CityId', 'CityName')); ?>
		<?php echo $form->error($model,'CurrentCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentZipcode'); ?>
		<?php echo $form->textField($model,'CurrentZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'CurrentZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentStateId'); ?>
		<?php echo $form->dropDownList($model,'CurrentStateId',CHtml::listData(State::model()->findAll(), 'StateId', 'StateName')); ?>
		<?php echo $form->error($model,'CurrentStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentCountryId'); ?>
		<?php echo $form->dropDownList($model,'CurrentCountryId',CHtml::listData(Country::model()->findAll(), 'CountryId', 'CountryName')); ?>
		<?php echo $form->error($model,'CurrentCountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaAddress1'); ?>
		<?php echo $form->textField($model,'PermaAddress1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PermaAddress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaAddress2'); ?>
		<?php echo $form->textField($model,'PermaAddress2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PermaAddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaSuburbId'); ?>
		<?php echo $form->dropDownList($model, 'PermaSuburbId',array(''=> 'Select Type') + CHtml::listData(Pickuppoint::model()->findAll(), 'PickupPointId', 'PickupPointName')); ?>
		<?php echo $form->error($model,'PermaSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaCityId'); ?>
		<?php echo $form->dropDownList($model,'PermaCityId',CHtml::listData(City::model()->findAll(), 'CityId', 'CityName')); ?>
		<?php echo $form->error($model,'PermaCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaStateId'); ?>
		<?php echo $form->dropDownList($model,'PermaStateId',CHtml::listData(State::model()->findAll(), 'StateId', 'StateName')); ?>
		<?php echo $form->error($model,'PermaStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaCountryId'); ?>
		<?php echo $form->dropDownList($model,'PermaCountryId',CHtml::listData(Country::model()->findAll(), 'CountryId', 'CountryName')); ?>
		<?php echo $form->error($model,'PermaCountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaZipcode'); ?>
		<?php echo $form->textField($model,'PermaZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'PermaZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mobile1'); ?>
		<?php echo $form->textField($model,'Mobile1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Mobile1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mobile2'); ?>
		<?php echo $form->textField($model,'Mobile2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Mobile2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone1'); ?>
		<?php echo $form->textField($model,'Phone1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Phone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone2'); ?>
		<?php echo $form->textField($model,'Phone2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Phone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fax1'); ?>
		<?php echo $form->textField($model,'Fax1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Fax1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fax2'); ?>
		<?php echo $form->textField($model,'Fax2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Fax2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email1'); ?>
		<?php echo $form->textField($model,'Email1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Email1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email2'); ?>
		<?php echo $form->textField($model,'Email2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Email2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QualificationId'); ?>
		<?php echo $form->textField($model,'QualificationId'); ?>
		<?php echo $form->error($model,'QualificationId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Occupation'); ?>
		<?php echo $form->textField($model,'Occupation'); ?>
		<?php echo $form->error($model,'Occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Income'); ?>
		<?php echo $form->textField($model,'Income'); ?>
		<?php echo $form->error($model,'Income'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
		<?php echo $form->error($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateUpdated'); ?>
		<?php echo $form->textField($model,'DateUpdated'); ?>
		<?php echo $form->error($model,'DateUpdated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->