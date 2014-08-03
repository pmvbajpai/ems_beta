<?php
/* @var $this FeeotherchargesController */
/* @var $model Feeothercharges */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feeothercharges-form',
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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'InstituteId'); ?>
		<?php echo $form->textField($model,'InstituteId', array('value' => 3)); ?>
		<?php echo $form->error($model,'InstituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AcademicSessionId'); ?>
		<?php echo $form->textField($model,'AcademicSessionId', array('value' => 3)); ?>
		<?php echo $form->error($model,'AcademicSessionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OtherComponentName'); ?>
		<?php echo $form->textField($model,'OtherComponentName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'OtherComponentName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->checkBox($model,'Status' ,array('value'=>1,'uncheckValue'=>0,'checked'=>'checked')); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->