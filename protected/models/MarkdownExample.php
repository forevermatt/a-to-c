<?php

class MarkdownExample extends Example
{
    public function getContentAsHtml()
    {
        // If we do not yet have the example data, read it in from a file.
        if ($this->content === null) {
            $this->content = $this->getContentFromFile();
        }
        
        // Convert the Markdown content to HTML and return it.
        $md = new CMarkdown();
        return $md->transform($this->content);
    }
    
    public function getContentFromFile()
    {
        $contentFilePath = $this->getRealContentFilePath();
        
        if ($contentFilePath === false) {
            throw new \Exception(
                'We could not find the content file for this example.',
                1432511640
            );
        }
        
        return file_get_contents($contentFilePath);
    }
    
    public function getRealContentFilePath()
    {
        return realpath($this->folder . '/' . intval($this->id) . '.md');
    }
}
