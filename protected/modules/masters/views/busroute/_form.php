<?php
/* @var $this BusrouteController */
/* @var $model Busroute */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'busroute-form',
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
		<?php echo $form->labelEx($model,'AcademicSessionId'); ?>
		<?php echo $form->dropDownList($model, 'AcademicSessionId',array(''=> 'Select Type') + CHtml::listData(Academicsession::model()->findAll(), 'AcademicSessionId', 'SessionName')); ?>
		<?php echo $form->error($model,'AcademicSessionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RouteName'); ?>
		<?php echo $form->textField($model,'RouteName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RouteName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BusId'); ?>
		<?php echo $form->dropDownList($model, 'BusId',CHtml::listData(Bus::model()->findAll(), 'BusId', 'BusName')); ?>
		<?php echo $form->error($model,'BusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pickupPoint,'PickupPointId'); ?>
		<?php echo $form->dropDownList($pickupPoint, 'PickupPointId',array(''=> 'Select Type') + CHtml::listData(Pickuppoint::model()->findAll(), 'PickupPointId', 'PickupPointName'), array('multiple' => 'multiple')); ?>
		<?php echo $form->error($pickupPoint,'PickupPointId'); ?>
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