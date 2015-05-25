<?php

class Example
{
    const TYPE_MARKDOWN = 'markdown';
    
    public $answer = null;
    public $content = null;
    public $id = null;
    public $type = null;
    
    protected $folder = null;
         
    public function __construct($id, $content, $answer, $type, $folder)
    {
        $this->id = $id;
        $this->content = $content;
        $this->answer = $answer;
        $this->type = $type;
        $this->folder = realpath($folder);
        
        if ($this->folder === false) {
            throw new \Exception(
                sprintf(
                    'We could not find that folder (%s).',
                    $folder
                ),
                1432511557
            );
        }
    }
    
    public function getContentAsHtml()
    {
        return CHtml::encode($this->content);
    }
    
    public static function getRealDataFilePath($folder, $id)
    {
        return realpath($folder . '/' . intval($id) . '.json');
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
        
        $data = self::getExampleData($folder, $id);
        
        $content = isset($data['content']) ? $data['content'] : null;
        $answer = isset($data['answer']) ? $data['answer'] : null;
        $type = isset($data['type']) ? $data['type'] : null;
        
        if ($type === Example::TYPE_MARKDOWN) {
            return new MarkdownExample($id, $content, $answer, $type, $folder);
        } elseif ($type === null) {
            return new Example($id, $content, $answer, $type, $folder);
        } else {
            throw new Exception(
                sprintf(
                    'We do not know how to show a "%s"-type example.',
                    $type
                ),
                1432511088
            );
        }
    }
    
    public static function getExampleData($folder, $id)
    {
        // Read in the data from the JSON file.
        $json = file_get_contents(self::getRealDataFilePath($folder, $id));
        $data = json_decode($json, true);
        
        // Return the resulting data.
        return $data;
    }
}
