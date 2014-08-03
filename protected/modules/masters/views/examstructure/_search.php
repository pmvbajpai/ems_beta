<?php
/* @var $this ExamstructureController */
/* @var $model Examstructure */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ExamStructureId'); ?>
		<?php echo $form->textField($model,'ExamStructureId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ClassSectionExamAssociationId'); ?>
		<?php echo $form->textField($model,'ClassSectionExamAssociationId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SubjectId'); ?>
		<?php echo $form->textField($model,'SubjectId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ComponentId'); ?>
		<?php echo $form->textField($model,'ComponentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaxMarks'); ?>
		<?php echo $form->textField($model,'MaxMarks'); ?>
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