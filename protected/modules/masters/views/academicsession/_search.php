<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'AcademicSessionId'); ?>
		<?php echo $form->textField($model,'AcademicSessionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SessionName'); ?>
		<?php echo $form->textField($model,'SessionName',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SessionStartDate'); ?>
		<?php echo $form->textField($model,'SessionStartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SessionEndDate'); ?>
		<?php echo $form->textField($model,'SessionEndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SortOrder'); ?>
		<?php echo $form->textField($model,'SortOrder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
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