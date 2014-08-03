<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */
/* @var $form CActiveForm */


$datePicker = Yii::app()->params['constants']['date_picker_format'];

?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'academicsession-form',
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
		<?php echo $form->labelEx($model,'SessionName'); ?>
		<?php echo $form->textField($model,'SessionName',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SessionName'); ?>
	</div>
	
	
	<div class="row">
		<?php
              echo $form->labelEx($model,'SessionStartDate');
              $this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $model,
					'attribute' => 'SessionStartDate',
					'options'=>array(
						'dateFormat'	=> $datePicker,
					),
					'htmlOptions' => array(
						'size' => '10',         // textField size
						'maxlength' => '10',    // textField maxlength
						'readonly'	=> 'readonly'
					),
			  ));
		?>    
	</div>

	
	 <div class="row">
              <?php
              echo $form->labelEx($model,'SessionEndDate'); 
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $model,
				'attribute' => 'SessionEndDate',
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