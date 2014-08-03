<?php
/* @var $this AnnouncementsController */
/* @var $model Announcements */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'AnnouncementId'); ?>
		<?php echo $form->textField($model,'AnnouncementId'); ?>
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
		<?php echo $form->label($model,'Heading'); ?>
		<?php echo $form->textField($model,'Heading',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ExpiryDate'); ?>
		<?php echo $form->textField($model,'ExpiryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AnnouncementType'); ?>
		<?php echo $form->textField($model,'AnnouncementType'); ?>
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