<?php
/* @var $this LearnController */
/* @var $question Question */
/* @var $example Example */
/* @var $choice string */

$this->pageTitle = 'Example';
?>

<p>
    <b>Instructions:</b> Pick an answer.  If you have no idea, simply guess.
    You will find out whether your guess was correct.
</p>

<hr />

<h2 id="question"><?php echo CHtml::encode($question->text); ?></h2>
<div id="example-content">
    <?php echo $example->getContentAsHtml(); ?>
</div>
<?php if ($choice === null): ?>
    <div id="option-buttons">
        <?php
        echo sprintf(
            '<a href="%s">%s</a> <a href="%s">%s</a>',
            $this->createUrl('', array(
                'slug' => $question->urlSlug,
                'exampleId' => $example->id,
                'choice' => 'a',
            )),
            CHtml::encode($question->optionALabel),
            $this->createUrl('', array(
                'slug' => $question->urlSlug,
                'exampleId' => $example->id,
                'choice' => 'b',
            )),
            CHtml::encode($question->optionBLabel)
        );
        ?>
    </div>
<?php else: ?>
    <p class="explanation">
        <?php if ($example->answer == $choice): ?>
            CORRECT
        <?php else: ?>
            Wrong
        <?php endif; ?>
    </p>
    <?php
    echo sprintf(
        '<a href="%s">Continue</a>',
        $this->createUrl('', array(
            'slug' => $question->urlSlug,
            'exampleId' => ($example->id + 1),
        ))
    );
    ?>
<?php endif; ?>
