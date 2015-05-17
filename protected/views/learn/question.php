<?php
/* @var $this LearnController */
/* @var $question Question */
/* @var $example Example */
/* @var $choice string */

$this->pageTitle = 'Example';
?>
<div class="alert alert-info" role="alert">
    <b>Instructions:</b> Pick an answer.  If you have no idea, simply guess.
    You will find out whether your guess was correct.
</div>

<h2 id="question"><?php echo CHtml::encode($question->text); ?></h2>
<div id="example-content" class="well well-sm">
    <div class="text-left" style="display: inline-block;">
        <?php echo $example->getContentAsHtml(); ?>
    </div>
</div>
<?php if ($choice === null): ?>
    <div id="option-buttons" class="row">
        <?php
        echo sprintf(
            '<a href="%s" class="btn btn-default">%s</a> '
            . '<a href="%s" class="btn btn-default">%s</a>',
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
            <div class="alert alert-success" role="alert">Correct</div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">Wrong</div>
        <?php endif; ?>
    </p>
    <?php
    echo sprintf(
        '<a href="%s" class="btn btn-primary">Continue</a>',
        $this->createUrl('', array(
            'slug' => $question->urlSlug,
            'exampleId' => ($example->id + 1),
        ))
    );
    ?>
<?php endif; ?>
