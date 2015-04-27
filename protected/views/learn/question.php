<?php
/* @var $this LearnController */
/* @var $question Question */
/* @var $example Example */

$this->pageTitle = 'Example';
?>

<p>
    <b>Instructions:</b> Pick an answer.  If you have no idea, simply guess.
    You'll find out whether your guess was correct.
</p>

<hr />

<h2 id="question"><?php echo CHtml::encode($question->text); ?></h2>
<div id="example-content">
    <?php
    $md = new CMarkdown();
    echo $md->transform($example->markdown_content);
    ?>
</div>
<div id="option-buttons">
    <?php
    echo sprintf(
        '<a href="%s">%s</a> <a href="%s">%s</a>',
        $this->createUrl('', array(
            'id' => $question->id,
            'exampleId' => $example->id,
            'choice' => 'a',
        )),
        CHtml::encode($question->option_a_label),
        $this->createUrl('', array(
            'id' => $question->id,
            'exampleId' => $example->id,
            'choice' => 'b',
        )),
        CHtml::encode($question->option_b_label)
    );
    ?>
</div>
