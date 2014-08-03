<?php
/* @var $this BusController */
/* @var $model Bus */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bus-form',
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
		<?php echo $form->dropDownList($model,'InstituteId',array(''=> 'Select Type') + CHtml::listData(Institute::model()->findAll(), 'InstituteId', 'InstituteName')); ?>
		<?php echo $form->error($model,'InstituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BusName'); ?>
		<?php echo $form->textField($model,'BusName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'BusName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BusNumber'); ?>
		<?php echo $form->textField($model,'BusNumber',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'BusNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Capacity'); ?>
		<?php echo $form->textField($model,'Capacity'); ?>
		<?php echo $form->error($model,'Capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->checkbox($model,'Status' ,array('value'=>1,'uncheckValue'=>0,'checked'=>'checked')); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->