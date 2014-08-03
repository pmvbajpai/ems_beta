<?php
/* @var $this BusrouteController */
/* @var $model Busroute */
/* @var $form CActiveForm */

?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BusRouteId'); ?>
		<?php echo $form->textField($model,'BusRouteId'); ?>
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
		<?php echo $form->label($model,'RouteName'); ?>
		<?php echo $form->textField($model,'RouteName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BusId'); ?>
		<?php echo $form->textField($model,'BusId'); ?>
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