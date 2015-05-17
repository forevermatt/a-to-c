<?php

class MarkdownExample extends Example
{
    public function getContentAsHtml()
    {
        $md = new CMarkdown();
        return $md->transform($this->content);
    }
}
