<?php
/* @var $this QuestionController */
/* @var $model Question */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'option_a_label'); ?>
		<?php echo $form->textField($model,'option_a_label',array('size'=>60,'maxlength'=>63)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'option_b_label'); ?>
		<?php echo $form->textField($model,'option_b_label',array('size'=>60,'maxlength'=>63)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->