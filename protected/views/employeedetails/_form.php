<?php
/* @var $this EmployeedetailsController */
/* @var $model Employeedetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employeedetails-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'UserId'); ?>
		<?php echo $form->textField($model,'UserId'); ?>
		<?php echo $form->error($model,'UserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
		<?php echo $form->error($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmployeeType'); ?>
		<?php echo $form->textField($model,'EmployeeType'); ?>
		<?php echo $form->error($model,'EmployeeType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Department'); ?>
		<?php echo $form->textField($model,'Department'); ?>
		<?php echo $form->error($model,'Department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gender'); ?>
		<?php echo $form->textField($model,'Gender'); ?>
		<?php echo $form->error($model,'Gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Religion'); ?>
		<?php echo $form->textField($model,'Religion'); ?>
		<?php echo $form->error($model,'Religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->textField($model,'Category'); ?>
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
		<?php echo $form->textField($model,'CurrentSuburbId'); ?>
		<?php echo $form->error($model,'CurrentSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentCityId'); ?>
		<?php echo $form->textField($model,'CurrentCityId'); ?>
		<?php echo $form->error($model,'CurrentCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentZipcode'); ?>
		<?php echo $form->textField($model,'CurrentZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'CurrentZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentStateId'); ?>
		<?php echo $form->textField($model,'CurrentStateId'); ?>
		<?php echo $form->error($model,'CurrentStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentCountryId'); ?>
		<?php echo $form->textField($model,'CurrentCountryId'); ?>
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
		<?php echo $form->textField($model,'PermaSuburbId'); ?>
		<?php echo $form->error($model,'PermaSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaCityId'); ?>
		<?php echo $form->textField($model,'PermaCityId'); ?>
		<?php echo $form->error($model,'PermaCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaStateId'); ?>
		<?php echo $form->textField($model,'PermaStateId'); ?>
		<?php echo $form->error($model,'PermaStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PermaCountryId'); ?>
		<?php echo $form->textField($model,'PermaCountryId'); ?>
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
		<?php echo $form->labelEx($model,'PassportNum'); ?>
		<?php echo $form->textField($model,'PassportNum',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PassportNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DateofJoining'); ?>
		<?php echo $form->textField($model,'DateofJoining'); ?>
		<?php echo $form->error($model,'DateofJoining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remarks'); ?>
		<?php echo $form->textField($model,'Remarks'); ?>
		<?php echo $form->error($model,'Remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AdmissionRef'); ?>
		<?php echo $form->textField($model,'AdmissionRef',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'AdmissionRef'); ?>
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