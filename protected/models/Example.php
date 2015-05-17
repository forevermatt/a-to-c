<?php

class Example
{
    const TYPE_MARKDOWN = 'markdown';
    
    public $answer = null;
    public $content = null;
    public $id = null;
    public $type = null;
         
    public function __construct($id, $content, $answer, $type)
    {
        $this->id = $id;
        $this->content = $content;
        $this->answer = $answer;
        $this->type = $type;
    }
    
    public static function getRealDataFilePath($folder, $id)
    {
        return realpath($folder . '/' . intval($id) . '.php');
    }
    
    public static function exampleDataFileExists($folder, $id)
    {
        return file_exists(self::getRealDataFilePath($folder, $id));
    }
    
    public static function find($folder, $id)
    {
        if ( ! self::exampleDataFileExists($folder, $id)) {
            return null;
        }
        
        $data = require(self::getRealDataFilePath($folder, $id));
        
        $content = isset($data['content']) ? $data['content'] : null;
        $answer = isset($data['answer']) ? $data['answer'] : null;
        $type = isset($data['type']) ? $data['type'] : null;
        
        if ($type === Example::TYPE_MARKDOWN) {
            return new MarkdownExample($id, $content, $answer, $type);
        } else {
            return new Example($id, $content, $answer, $type);
        }
    }
}
