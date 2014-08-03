<?php
/* @var $this CollectionController */
/* @var $model Mastercollection */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mastercollection-form',
	
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MasterCollectionTypeId'); ?>
		<?php echo $form->dropDownList($model,'MasterCollectionTypeId', CHtml::listData(Mastercollectiontype::model()->findAll(), 'MasterCollectionTypeId', 'MasterCollectionType'), array('empty'=>'select Type'));  ?>
		<?php 
			echo CHtml::link('Collection Type', array('/masters/collectiontype'));   

			
		?> 
		<?php echo $form->error($model,'MasterCollectionTypeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CollectionName'); ?>
		<?php echo $form->textField($model,'CollectionName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CollectionName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Description'); ?>
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