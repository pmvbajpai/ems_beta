<?php
/* @var $this UserdocumentController */
/* @var $model Userdocument */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userdocument-form',
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
		<?php echo $form->labelEx($model,'DocumentType'); ?>
		<?php echo $form->textField($model,'DocumentType'); ?>
		<?php echo $form->error($model,'DocumentType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FileName'); ?>
		<?php echo $form->textField($model,'FileName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'FileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comments'); ?>
		<?php echo $form->textField($model,'Comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
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