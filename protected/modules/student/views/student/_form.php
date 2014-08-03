<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */

	$datePicker = Yii::app()->params['constants']['date_picker_format'];

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	/* 'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
			'validateOnChange'=>true,
			'validateOnSubmit'=>true,
		) */
)); ?>

	<?php
	
		$studentType = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::STUDENT_TYPE);
		$gender = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::GENDER);
		$religion = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::RELIGION);
		$reservedCategory = Emsmastercollection::getMasterCollectionByCollectionTypeId(Constants::RESERVE_CATEGORY);
	?>
	
	
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary(array($model, $studentDetails)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($userDetails,'UserName'); ?>
		<?php echo $form->textField($userDetails,'UserName'); ?>
		<?php echo $form->error($userDetails,'UserName'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($userDetails,'Password'); ?>
		<?php echo $form->textField($userDetails,'Password',array('size'=>25,'maxlength'=>25, 'value' => 'abc@123')); ?>
		<?php echo $form->error($userDetails,'Password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ScholarNumber'); ?>
		<?php echo $form->textField($model,'ScholarNumber',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'ScholarNumber'); ?>
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
		<?php echo $form->labelEx($studentDetails,'DOB'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $studentDetails,
					'attribute' => 'DOB',
					'options'=>array(
						'dateFormat'	=> $datePicker,
						'changeMonth'	=> true,
						'changeYear'	=> true,
						'maxDate'		=> date('d-m-Y')
					),
					'htmlOptions' => array(
						'size' => '10',         // textField size
						'maxlength' => '10',    // textField maxlength
						'readonly'	=> 'readonly'
					),
			));
		?>
		<?php echo $form->error($studentDetails,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'StudentType'); ?>
		<?php 
			echo $form->dropDownList($studentDetails,'StudentType', CHtml::listData($studentType, 'id', 'name'),
										array('options' => array(
															Constants::NEW_STUDENT_ID =>array('selected'=>true)
														)
										)
									); 
		?>
		<?php echo $form->error($studentDetails,'StudentType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Gender'); ?>
		<?php echo $form->radioButtonList($studentDetails,'Gender', CHtml::listData($gender, 'id', 'name'),
											array('labelOptions'=>array('style'=>'display:inline'), 'separator' => "&nbsp;")
										); ?>
		<?php echo $form->error($studentDetails,'Gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Religion'); ?>
		<?php echo $form->dropDownList($studentDetails,'Religion', CHtml::listData($religion, 'id', 'name')); ?>
		<?php echo $form->error($studentDetails,'Religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Category'); ?>
		<?php echo $form->dropDownList($studentDetails,'Category', CHtml::listData($reservedCategory, 'id', 'name')); ?>
		<?php echo $form->error($studentDetails,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentAddress1'); ?>
		<?php echo $form->textField($studentDetails,'CurrentAddress1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($studentDetails,'CurrentAddress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentAddress2'); ?>
		<?php echo $form->textField($studentDetails,'CurrentAddress2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($studentDetails,'CurrentAddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentSuburbId'); ?>
		<?php echo $form->textField($studentDetails,'CurrentSuburbId'); ?>
		<?php echo $form->error($studentDetails,'CurrentSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentCityId'); ?>
		<?php echo $form->textField($studentDetails,'CurrentCityId'); ?>
		<?php echo $form->error($studentDetails,'CurrentCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentZipcode'); ?>
		<?php echo $form->textField($studentDetails,'CurrentZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($studentDetails,'CurrentZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentStateId'); ?>
		<?php echo $form->textField($studentDetails,'CurrentStateId'); ?>
		<?php echo $form->error($studentDetails,'CurrentStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'CurrentCountryId'); ?>
		<?php echo $form->textField($studentDetails,'CurrentCountryId'); ?>
		<?php echo $form->error($studentDetails,'CurrentCountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PermaAddress1'); ?>
		<?php echo $form->textField($studentDetails,'PermaAddress1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($studentDetails,'PermaAddress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Permanent Address2'); ?>
		<?php echo $form->textField($studentDetails,'PermaAddress2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($studentDetails,'PermaAddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PermaSuburbId'); ?>
		<?php echo $form->textField($studentDetails,'PermaSuburbId'); ?>
		<?php echo $form->error($studentDetails,'PermaSuburbId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PermaCityId'); ?>
		<?php echo $form->textField($studentDetails,'PermaCityId'); ?>
		<?php echo $form->error($studentDetails,'PermaCityId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PermaStateId'); ?>
		<?php echo $form->textField($studentDetails,'PermaStateId'); ?>
		<?php echo $form->error($studentDetails,'PermaStateId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PermaCountryId'); ?>
		<?php echo $form->textField($studentDetails,'PermaCountryId'); ?>
		<?php echo $form->error($studentDetails,'PermaCountryId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PermaZipcode'); ?>
		<?php echo $form->textField($studentDetails,'PermaZipcode',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($studentDetails,'PermaZipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Mobile'); ?>
		<?php echo $form->textField($studentDetails,'Mobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($studentDetails,'Mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Phone1'); ?>
		<?php echo $form->textField($studentDetails,'Phone1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($studentDetails,'Phone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Phone2'); ?>
		<?php echo $form->textField($studentDetails,'Phone2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($studentDetails,'Phone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Fax1'); ?>
		<?php echo $form->textField($studentDetails,'Fax1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($studentDetails,'Fax1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Fax2'); ?>
		<?php echo $form->textField($studentDetails,'Fax2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($studentDetails,'Fax2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Email1'); ?>
		<?php echo $form->textField($studentDetails,'Email1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($studentDetails,'Email1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Email2'); ?>
		<?php echo $form->textField($studentDetails,'Email2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($studentDetails,'Email2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'PassportNum'); ?>
		<?php echo $form->textField($studentDetails,'PassportNum',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($studentDetails,'PassportNum'); ?>
	</div>

	<div class="row">
		<?php
			echo $form->labelEx($studentDetails,'DateofJoining');
			
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model' => $studentDetails,
					'attribute' => 'DateofJoining',
					'options'=>array(
						'dateFormat'	=> $datePicker,
						'changeMonth'	=> true,
						'changeYear'	=> true,
						'maxDate'		=> date('d-m-Y')
					),
					'htmlOptions' => array(
						'size' => '10',         // textField size
						'maxlength' => '10',    // textField maxlength
						'readonly'	=> 'readonly'
					),
			));

			echo $form->error($studentDetails,'DateofJoining');
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'Status'); ?>
		<?php echo $form->checkBox($studentDetails,'Status'); ?>
		<?php echo $form->error($studentDetails,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($studentDetails,'AdmissionReferencedBy'); ?>
		<?php echo $form->textField($studentDetails,'AdmissionReferencedBy',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($studentDetails,'AdmissionReferencedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
		
<style>
		div.row{
			width : 30%;
			float : left;
			padding-right : 23px;
		}
</style>