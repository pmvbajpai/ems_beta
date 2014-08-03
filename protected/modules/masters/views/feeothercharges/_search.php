<?php
/* @var $this FeeotherchargesController */
/* @var $model Feeothercharges */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FeeOtherChargesId'); ?>
		<?php echo $form->textField($model,'FeeOtherChargesId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstituteId'); ?>
		<?php echo $form->textField($model,'InstituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AcademicSessionId'); ?>
		<?php echo $form->textField($model,'AcademicSessionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OtherComponentName'); ?>
		<?php echo $form->textField($model,'OtherComponentName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SortOrder'); ?>
		<?php echo $form->textField($model,'SortOrder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateUpdated'); ?>
		<?php echo $form->textField($model,'DateUpdated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->