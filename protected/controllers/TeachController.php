<?php

class TeachController extends Controller
{
    public $layout = '//layouts/learning';
    
    public function actionIndex()
    {
        // Show the list of topics (aka. questions).
        $questions = Question::findAll(\Yii::app()->params['questionPath']);
        $this->render('index', array(
            'questions' => $questions,
        ));
    }
    public function actionQuestion($slug, $exampleId = 1, $choice = null)
    {
        // Get the specified question.
        $question = Question::findBySlug(
            $slug,
            \Yii::app()->params['questionPath']
        );
        
        // Get the selected example.
        $example = $question->getExample($exampleId);
        
        // If there was no such example, send them to a "done" page.
        if ($example === null) {
            $this->redirect(array(
                'learn/done',
                'slug' => $slug,
            ));
        }
        
        // Show that question and example (and answer, if a choice has already
        // been made).
        $this->render('question', array(
            'question' => $question,
            'example' => $example,
            'choice' => $choice,
        ));
    }
}
