<?php
/* @var $this ExampleController */
/* @var $data Example */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question_id')); ?>:</b>
	<?php echo CHtml::encode($data->question_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('markdown_content')); ?>:</b>
	<?php echo CHtml::encode($data->markdown_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correct_option')); ?>:</b>
	<?php echo CHtml::encode($data->correct_option); ?>
	<br />


</div>