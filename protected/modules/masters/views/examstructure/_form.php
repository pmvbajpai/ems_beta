<?php
/* @var $this ExamstructureController */
/* @var $model Examstructure */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'examstructure-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($masterClass); ?>

	<div class="row">
		<?php echo $form->labelEx($masterClass,'ClassId'); ?>
		<?php 
		echo $form->dropDownList($masterClass,'ClassId', CHtml::listData(MasterClass::model()->findAll(), 'ClassId', 'ClassName'),
		array(
		'prompt'=>'-Select-',
		
		'ajax' => array(
				'type'=>'POST', //request type
				'url'=>CController::createUrl('examstructure/getsection'), //url to call.
				//Style: CController::createUrl('currentController/methodToCall')
				'update'=>'#'.CHtml::activeId($classSection,'SectionId') , //selector to update
				'data'=>array('ClassId'=>'js:this.value'),
				
		//leave out the data key to pass all form values through
		)));

		?>
		
	</div>
	
	<div class="row">
		<?php 
/* echo '<pre>';
print_r($classSection->attributes); */
?>
		<?php echo $form->dropDownList($classSection,'SectionId',''/* ,
				array(
						
						
						'ajax' => array(
								'type'=>'POST', //request type
								'url'=>CController::createUrl('examstructure/getexam'), //url to call.
								//Style: CController::createUrl('currentController/methodToCall')
								'update'=>'#ExamId' , //selector to update
								'data'=>array('SectionId'=>'js:this.value')
								//leave out the data key to pass all form values through
						)) */
		);  ?>
		
		
		<?php 
		Yii::app()->clientScript->registerScript('nothing', '
		    jQuery("#MasterClass_ClassId").change(function(){
		      jQuery.ajax({
		            url: "' . Yii::app()->createUrl('masters/examstructure/getexam') . '",
		            type: "POST",
		            data: {ClassId: this.value},
		            success: function(html) {
		                jQuery("#ExamId").html(html);
		            }
		        });
		    });
		');
		?>
	</div>
	
	<div class="row">
		<?php 
		//empty since it will be filled by the other dropdown
		echo CHtml::dropDownList('ExamId','', array());
		?>
	
	</div>



	

<?php $this->endWidget(); ?>

</div><!-- form -->