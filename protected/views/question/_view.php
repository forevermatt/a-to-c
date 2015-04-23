<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_a_label')); ?>:</b>
	<?php echo CHtml::encode($data->option_a_label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_b_label')); ?>:</b>
	<?php echo CHtml::encode($data->option_b_label); ?>
	<br />


</div>