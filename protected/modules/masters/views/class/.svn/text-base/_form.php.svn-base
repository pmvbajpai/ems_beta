<?php
/* @var $this ClassController */
/* @var $model MasterClass */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-class-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ClassName'); ?>
		<?php echo $form->textField($model,'ClassName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ClassName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ClassDisplayName'); ?>
		<?php echo $form->textField($model,'ClassDisplayName',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'ClassDisplayName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->checkBox($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->