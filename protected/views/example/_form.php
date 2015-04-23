<?php
/* @var $this ExampleController */
/* @var $model Example */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'example-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'question_id'); ?>
		<?php echo $form->textField($model,'question_id'); ?>
		<?php echo $form->error($model,'question_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'markdown_content'); ?>
		<?php echo $form->textArea($model,'markdown_content',array('style' => 'height: 200px; width: 100%;', 'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'markdown_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correct_option'); ?>
		<?php echo $form->textField($model,'correct_option',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'correct_option'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->