<?php

class Question
{
    protected $folderPath = null;
    public $options = null;
    public $text = null;
    public $urlSlug = null;

    public function __construct($folderPath)
    {
        // Record the (real) path for this question's data.
        $this->folderPath = realpath($folderPath);
        
        // Record the folder name as the URL slug.
        $this->urlSlug = basename($this->folderPath);
        
        // Read in the question's data.
        $data = $this->getQuestionData();
        
        // Record it in the appropriate fields.
        $this->text = $data['text'];
        $this->options = $data['options'];
    }
    
    public function getQuestionData()
    {
        // Read in the data from the JSON file.
        $json = file_get_contents($this->folderPath . '/data.json');
        $data = json_decode($json, true);
        
        // Return the resulting data.
        return $data;
    }
    
    public static function findAll($path)
    {
        // Get the real path from the given one.
        $realPath = realpath($path);
        
        // Make sure it actually exists.
        if ($realPath === false) {
            throw new \Exception(
                'Invalid path (does it exist?): ' . $path,
                1432127024
            );
        }
        
        // Get a list of all of the Questions found there.
        $questions = array();
        $pathContents = glob($realPath . '/*');
        foreach ($pathContents as $itemInFolder) {
            if (is_dir($itemInFolder)) {
                if (file_exists($itemInFolder . '/data.json')) {
                    $questions[] = new Question($itemInFolder);
                }
            }
        }
        return $questions;
    }
    
    public static function findBySlug($slug, $questionPath)
    {
        return new Question($questionPath . $slug);
    }
    
    public function getExample($exampleId)
    {
        return Example::find($this->folderPath, $exampleId, $this);
    }
}
