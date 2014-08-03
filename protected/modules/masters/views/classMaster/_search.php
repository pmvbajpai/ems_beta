<?php
/* @var $this ClassMasterController */
/* @var $model Classsectionassociation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ClassSectionAssociationId'); ?>
		<?php echo $form->textField($model,'ClassSectionAssociationId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClassId'); ?>
		<?php echo $form->textField($model,'ClassId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SectionId'); ?>
		<?php echo $form->textField($model,'SectionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InsituteId'); ?>
		<?php echo $form->textField($model,'InsituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AcademicSessionId'); ?>
		<?php echo $form->textField($model,'AcademicSessionId'); ?>
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