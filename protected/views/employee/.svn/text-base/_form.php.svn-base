<?php
/* @var $this EmployeeController */
/* @var $employeeDetails Employee */
/* @var $form CActiveForm */

$datePicker = Yii::app()->params['constants']['date_picker_format'];
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    /* 'clientOptions'=>array(
		'validateOnChange'=>true,
        'validateOnSubmit'=>true,
	)  */
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'UserId'); ?>
		<?php echo $form->textField($model,'UserId'); ?>
		<?php echo $form->error($model,'UserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MiddleName'); ?>
		<?php echo $form->textField($model,'MiddleName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MiddleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EmployeeCode'); ?>
		<?php echo $form->textField($model,'EmployeeCode',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'EmployeeCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'DOB'); ?>
		<?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $employeeDetails,
				'attribute' => 'DOB',
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
		<?php echo $form->error($employeeDetails,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'EmployeeType'); ?>
		<?php echo $form->textField($employeeDetails,'EmployeeType'); ?>
		<?php echo $form->error($employeeDetails,'EmployeeType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Department'); ?>
		<?php echo $form->textField($employeeDetails,'Department'); ?>
		<?php echo $form->error($employeeDetails,'Department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Gender'); ?>
		<?php echo $form->textField($employeeDetails,'Gender'); ?>
		<?php echo $form->error($employeeDetails,'Gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Religion'); ?>
		<?php echo $form->textField($employeeDetails,'Religion'); ?>
		<?php echo $form->error($employeeDetails,'Religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Category'); ?>
		<?php echo $form->textField($employeeDetails,'Category'); ?>
		<?php echo $form->error($employeeDetails,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentAddress1'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentAddress1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employeeDetails,'CurrentAddress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentAddress2'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentAddress2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employeeDetails,'CurrentAddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentSuburbId'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentSuburbId'); ?>
		<?php echo $form->error($employeeDetails,'CurrentSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentCityId'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentCityId'); ?>
		<?php echo $form->error($employeeDetails,'CurrentCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentZipcode'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($employeeDetails,'CurrentZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentStateId'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentStateId'); ?>
		<?php echo $form->error($employeeDetails,'CurrentStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'CurrentCountryId'); ?>
		<?php echo $form->textField($employeeDetails,'CurrentCountryId'); ?>
		<?php echo $form->error($employeeDetails,'CurrentCountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaAddress1'); ?>
		<?php echo $form->textField($employeeDetails,'PermaAddress1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employeeDetails,'PermaAddress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaAddress2'); ?>
		<?php echo $form->textField($employeeDetails,'PermaAddress2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employeeDetails,'PermaAddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaSuburbId'); ?>
		<?php echo $form->textField($employeeDetails,'PermaSuburbId'); ?>
		<?php echo $form->error($employeeDetails,'PermaSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaCityId'); ?>
		<?php echo $form->textField($employeeDetails,'PermaCityId'); ?>
		<?php echo $form->error($employeeDetails,'PermaCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaStateId'); ?>
		<?php echo $form->textField($employeeDetails,'PermaStateId'); ?>
		<?php echo $form->error($employeeDetails,'PermaStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaCountryId'); ?>
		<?php echo $form->textField($employeeDetails,'PermaCountryId'); ?>
		<?php echo $form->error($employeeDetails,'PermaCountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PermaZipcode'); ?>
		<?php echo $form->textField($employeeDetails,'PermaZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($employeeDetails,'PermaZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Mobile1'); ?>
		<?php echo $form->textField($employeeDetails,'Mobile1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'Mobile1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Mobile2'); ?>
		<?php echo $form->textField($employeeDetails,'Mobile2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'Mobile2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Phone1'); ?>
		<?php echo $form->textField($employeeDetails,'Phone1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'Phone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Phone2'); ?>
		<?php echo $form->textField($employeeDetails,'Phone2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'Phone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Fax1'); ?>
		<?php echo $form->textField($employeeDetails,'Fax1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'Fax1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Fax2'); ?>
		<?php echo $form->textField($employeeDetails,'Fax2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'Fax2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Email1'); ?>
		<?php echo $form->textField($employeeDetails,'Email1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employeeDetails,'Email1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Email2'); ?>
		<?php echo $form->textField($employeeDetails,'Email2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($employeeDetails,'Email2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'PassportNum'); ?>
		<?php echo $form->textField($employeeDetails,'PassportNum',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($employeeDetails,'PassportNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'DateofJoining'); ?>
		<?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model' => $employeeDetails,
				'attribute' => 'DateofJoining',
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
		<?php echo $form->error($employeeDetails,'DateofJoining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Status'); ?>
		<?php echo $form->textField($employeeDetails,'Status'); ?>
		<?php echo $form->error($employeeDetails,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Remarks'); ?>
		<?php echo $form->textField($employeeDetails,'Remarks'); ?>
		<?php echo $form->error($employeeDetails,'Remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'AdmissionRef'); ?>
		<?php echo $form->textField($employeeDetails,'AdmissionRef',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($employeeDetails,'AdmissionRef'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employeeDetails,'Status'); ?>
		<?php echo $form->textField($employeeDetails,'Status'); ?>
		<?php echo $form->error($employeeDetails,'Status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
			
<style>

	.row {
    float: left;
    height: 112px;
    margin: 0 !important;
    padding: 0 !important;
    width: 33%;
}			
			
</style>