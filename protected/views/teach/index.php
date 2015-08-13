<?php
/* @var $this TeachController */
/* @var $questions Question[] */

$this->pageTitle = 'Pick a Topic';
?>

<h2>Which of these questions would you like to provide examples for?</h2>

<div class="text-left" style="display: inline-block;">
<?php

// Show each question.
foreach ($questions as $question) {
    echo sprintf(
        '<p><a href="%s" class="btn btn-default">%s</a></p> ',
        $this->createUrl('teach/example', array('slug' => $question->urlSlug)),
        CHtml::encode($question->text)
    );
}

?>
</div>
<p>
    ... or add a <a href="<?php echo $this->createUrl('teach/new'); ?>">new
    question</a>.
</p>
