<?php
/* @var $this LearnController */
/* @var $question Question[] */

$this->pageTitle = 'Questions';

// Show each question.
foreach ($questions as $question) {
    echo sprintf(
        '<div>%s <a href="%s">Learn</a></div>',
        CHtml::encode($question->text),
        $this->createUrl('learn/question', array('id' => $question->id))
    );
}
