<?php
/* @var $this SubjectsController */
/* @var $model Subjects */
/* @var $form CActiveForm */

$datePicker = Yii::app()->params['constants']['date_picker_format'];
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subjects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SubjectName'); ?>
		<?php echo $form->textField($model,'SubjectName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SubjectName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SubjectCode'); ?>
		<?php echo $form->textField($model,'SubjectCode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'SubjectCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstituteId'); ?>
		<?php echo $form->dropDownList($model,'InstituteId',array(''=> 'Select Type') + CHtml::listData(Institute::model()->findAll(), 'InstituteId', 'InstituteName')); ?>
		<?php echo $form->error($model,'InstituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comments'); ?>
		<?php echo $form->textArea($model,'Comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Comments'); ?>
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