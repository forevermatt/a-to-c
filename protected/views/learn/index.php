<?php
/* @var $this LearnController */
/* @var $questions Question[] */

$this->pageTitle = 'Pick a Question';
?>

<h2>Which of these questions would you like to master?</h2>

<?php

// Show each question.
foreach ($questions as $question) {
    echo sprintf(
        '<div>%s <a href="%s">Learn</a></div>',
        CHtml::encode($question->text),
        $this->createUrl('learn/question', array('slug' => $question->urlSlug))
    );
}
