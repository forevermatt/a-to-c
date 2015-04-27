<?php

class LearnController extends Controller
{
	public $layout='//layouts/learning';
    
    public function actionIndex() {
        
        // Show the list of things to learn.
        $questions = Question::model()->findAll();
        $this->render('index', array(
            'questions' => $questions,
        ));
    }
    
    public function actionQuestion($id, $exampleId = null) {
        
        // Get the specified question.
        $question = Question::model()->findByPk($id);
        
        // If no example ID was specified, use the first example.
        if ($exampleId === null) {
            $example = Example::model()->findByAttributes(array(
                'question_id' => $id,
            ), array(
                'order' => 'id',
            ));
        } else {
            $example = Example::model()->findByPk($exampleId);
        }
        
        // Show that question and example.
        $this->render('question', array(
            'question' => $question,
            'example' => $example,
        ));
    }
}
