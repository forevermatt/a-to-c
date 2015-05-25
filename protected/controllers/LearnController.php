<?php

class LearnController extends Controller
{
    public $layout = '//layouts/learning';
    
    public function actionIndex()
    {
        // Show the list of things to learn.
        $questions = Question::findAll(\Yii::app()->params['questionPath']);
        $this->render('index', array(
            'questions' => $questions,
        ));
    }
    
    public function actionAsset($slug, $exampleId)
    {
        // Get the specified question.
        $question = Question::findBySlug(
            $slug,
            \Yii::app()->params['questionPath']
        );
        
        // Get the selected example.
        $example = $question->getExample($exampleId);
        
        // If there was no such example, indicate that.
        if ($example === null) {
            throw new \CHttpException(
                404,
                sprintf('No such asset found ("%s", %s)', $slug, $exampleId),
                1432561087
            );
        }
        
        // Return that asset as though it had simply been requested from the
        // webserver.
        $this->renderPartial('asset', array(
            'example' => $example,
        ));
    }
    
    public function actionDone($slug)
    {
        // Get the specified question.
        $question = Question::findBySlug(
            $slug,
            \Yii::app()->params['questionPath']
        );
        
        $this->render('done', array(
            'question' => $question,
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
