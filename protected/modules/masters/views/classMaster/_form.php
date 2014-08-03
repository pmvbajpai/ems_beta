<?php
/* @var $this ClassMasterController */
/* @var $model Classsectionassociation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classsectionassociation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

// included class master script
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/class-master.js');

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	

	<div class="row">
		<?php echo $form->labelEx($model,'ClassId'); ?>
		<?php echo $form->dropDownList($model,'ClassId', CHtml::listData(MasterClass::model()->findAll(), 'ClassId', 'ClassName'), array('empty'=>'-select-'));  ?>
		<?php 
			echo CHtml::link('Class', array('/masters/class'));   
		?> 
		<?php echo $form->error($model,'ClassId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SectionId'); ?>
		<?php echo $form->listBox($model,'SectionId', CHtml::listData(Section::model()->findAll(), 'SectionId', 'SectionName'), array('multiple' => 'true'));  ?>
		<?php 
			echo CHtml::link('Section', array('/masters/section'));   
		?> 
		<?php echo $form->error($model,'SectionId'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($examMaster,'ExamId'); ?>
		<?php echo $form->listBox($examMaster,'ExamId', CHtml::listData(Exammaster::model()->findAll(), 'ExamId', 'ExamName'), array('multiple' => 'true'));  ?>
		<?php 
			echo CHtml::link('Exam', array('/masters/exammaster'));   
		?> 
		<?php echo $form->error($examMaster,'ExamId'); ?>
	</div>
	
	<!-- Subject List Start -->
	<div class="row">
		<?php  $subjects = CHtml::listData(Subjects::model()->findAll(), 'SubjectId', 'SubjectName');
		 echo '<table>';
		 echo '<tr>';
		 echo '<th>Subjects</th>';
		 echo '<th>Set Optional</th>';
		 echo '</tr>';
		 foreach($subjects as $key => $values) 
		 {
		 		echo '<tr>';
		 		echo '<td class="rememberMe">'.CHtml::activeLabel($classSubject, $values).' ';
		 		echo CHtml::activeCheckBox($classSubject, "SubjectId[]", array('id'=>'SubjectId'.$key, 'value' => $key,'onclick' => '
		 				if($(this).is(\':checked\'))
		 					$("input[id*=\"IsOptional'.$key.'\"]").attr(\'disabled\', false); 
		 				else
		 					$("input[id*=\"IsOptional'.$key.'\"]").attr(\'disabled\', true);
		 				
		 		') )."</td>";
		 		echo '<td>'.CHtml::activeCheckBox($classSubject, "IsOptional[]", array('id'=>'IsOptional'.$key, 'disabled' => 'disabled')).'</td>';
		 		echo '</tr>';
		 }
		 echo '</table>'; ?>
	</div>
	<!-- Subject List Start -->

	<?php echo $form->hiddenField($model,'InstituteId',array('value'=>'3')); ?>
	<?php echo $form->hiddenField($model,'AcademicSessionId',array('value'=>'3')); ?>
	

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