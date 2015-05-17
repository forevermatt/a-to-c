<?php
/* @var $this LearnController */
/* @var $question Question */

$this->pageTitle = 'Done';
?>

<div class="alert alert-success" role="alert">
    <b>You're done!</b> That was the last example we have for the question
    "<?php echo CHtml::encode($question->text); ?>".
</div>
<p>
    <?php
    echo sprintf(
        'Now you can either %s or %s',
        sprintf(
            '<a href="%s">%s</a>',
            $this->createUrl('learn/'),
            'go back to the list of questions'
        ),
        sprintf(
            '<a href="%s">%s</a>',
            $this->createUrl('learn/question', array(
                'slug' => $question->urlSlug,
            )),
            'go through these examples again'
        )
    );
    ?>
</p>
