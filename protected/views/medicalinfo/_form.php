<?php
/* @var $this MedicalinfoController */
/* @var $model Medicalinfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medicalinfo-form',
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
		<?php echo $form->labelEx($model,'MedicalHistory'); ?>
		<?php echo $form->textField($model,'MedicalHistory'); ?>
		<?php echo $form->error($model,'MedicalHistory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularDocName'); ?>
		<?php echo $form->textField($model,'RegularDocName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'RegularDocName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularDocAddress'); ?>
		<?php echo $form->textField($model,'RegularDocAddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegularDocAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularDocMobile'); ?>
		<?php echo $form->textField($model,'RegularDocMobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RegularDocMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularDocPhone'); ?>
		<?php echo $form->textField($model,'RegularDocPhone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RegularDocPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularDocEmail'); ?>
		<?php echo $form->textField($model,'RegularDocEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegularDocEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularHospName'); ?>
		<?php echo $form->textField($model,'RegularHospName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegularHospName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularHospPhone'); ?>
		<?php echo $form->textField($model,'RegularHospPhone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'RegularHospPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularHospEmail'); ?>
		<?php echo $form->textField($model,'RegularHospEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegularHospEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegularHospAddress'); ?>
		<?php echo $form->textField($model,'RegularHospAddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'RegularHospAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Height'); ?>
		<?php echo $form->textField($model,'Height'); ?>
		<?php echo $form->error($model,'Height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BloodGroup'); ?>
		<?php echo $form->textField($model,'BloodGroup'); ?>
		<?php echo $form->error($model,'BloodGroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LeftEyeSight'); ?>
		<?php echo $form->textField($model,'LeftEyeSight',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'LeftEyeSight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RightEyeSight'); ?>
		<?php echo $form->textField($model,'RightEyeSight',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'RightEyeSight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdentificationMark1'); ?>
		<?php echo $form->textField($model,'IdentificationMark1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'IdentificationMark1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdentificationMark2'); ?>
		<?php echo $form->textField($model,'IdentificationMark2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'IdentificationMark2'); ?>
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