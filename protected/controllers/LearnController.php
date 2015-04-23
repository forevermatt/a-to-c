<?php

class LearnController extends Controller
{
	public $layout='//layouts/learning';
    
    public function actionIndex() {
        
        // Show the list of things to learn.
        $questions = Question::model()->findAll();
        $this->render('questions', array(
            'questions' => $questions,
        ));
    }

}
