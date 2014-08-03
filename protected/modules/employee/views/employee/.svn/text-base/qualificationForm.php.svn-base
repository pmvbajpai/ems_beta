<?php
/* @var $this UserqualificationController */
/* @var $model Userqualification */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userqualification-form',
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
)); ?>

	<h1>User Qualification</h1>
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'QualificationOf'); ?>
		<?php echo $form->textField($model,'QualificationOf'); ?>
		<?php echo $form->error($model,'QualificationOf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
		<?php echo $form->error($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Education'); ?>
		<?php echo $form->textField($model,'Education'); ?>
		<?php echo $form->error($model,'Education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Field'); ?>
		<?php echo $form->textField($model,'Field'); ?>
		<?php echo $form->error($model,'Field'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'University'); ?>
		<?php echo $form->textField($model,'University'); ?>
		<?php echo $form->error($model,'University'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YearPassed'); ?>
		<?php echo $form->textField($model,'YearPassed'); ?>
		<?php echo $form->error($model,'YearPassed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Grade'); ?>
		<?php echo $form->textField($model,'Grade'); ?>
		<?php echo $form->error($model,'Grade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->