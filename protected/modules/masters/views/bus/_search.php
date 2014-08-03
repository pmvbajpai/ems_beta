<?php
/* @var $this BusController */
/* @var $model Bus */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BusId'); ?>
		<?php echo $form->textField($model,'BusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InstituteId'); ?>
		<?php echo $form->textField($model,'InstituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BusName'); ?>
		<?php echo $form->textField($model,'BusName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BusNumber'); ?>
		<?php echo $form->textField($model,'BusNumber',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Capacity'); ?>
		<?php echo $form->textField($model,'Capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>255)); ?>
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