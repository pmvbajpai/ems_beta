<?php
/* @var $this ExammasterController */
/* @var $model Exammaster */
/* @var $form CActiveForm */
$datePicker = Yii::app()->params['constants']['date_picker_format'];

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exammaster-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ExamName'); ?>
		<?php echo $form->textField($model,'ExamName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ExamName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ExamStartDate'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'ExamStartDate',
					'options'=>array(
							'dateFormat'	=> $datePicker,
					),
					'htmlOptions' => array(
							'size'		=> '10',         // textField size
							'maxlength' => '10',    // textField maxlength
							'readonly'	=> 'readonly'
					),
			));
		?>
		<?php echo $form->error($model,'ExamStartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ExamEndDate'); ?>
		<?php 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model' => $model,
						'attribute' => 'ExamEndDate',
						'options'=>array(
								'dateFormat'	=> $datePicker,
						),
						'htmlOptions' => array(
								'size'		=> '10',         // textField size
								'maxlength' => '10',    // textField maxlength
								'readonly'	=> 'readonly'
						),
				));
		?>
		<?php echo $form->error($model,'ExamEndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AcademicSessionId'); ?>
		<?php echo $form->textField($model,'AcademicSessionId'); ?>
		<?php echo $form->error($model,'AcademicSessionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InstituteId'); ?>
		<?php echo $form->textField($model,'InstituteId'); ?>
		<?php echo $form->error($model,'InstituteId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->checkBox($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->