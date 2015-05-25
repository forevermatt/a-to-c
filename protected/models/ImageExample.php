<?php

class ImageExample extends AssetExample
{
    protected $attributionHtml = null;
    
    public function __construct(
        $id,
        $content,
        $answer,
        $type,
        $folder,
        \Question $question,
        $attributionHtml = null)
    {
        parent::__construct($id, $content, $answer, $type, $folder, $question);
        $this->attributionHtml = $attributionHtml;
    }
    
    public function getContentAsHtml()
    {
        return sprintf(
            '<img src="%s" class="img-responsive center-block" style="%s" />'
            . '<div class="text-muted" id="attribution">%s</div>',
            \Yii::app()->createUrl('learn/asset', array(
                'slug' => $this->question->urlSlug,
                'exampleId' => $this->id,
            )),
            'max-height: 360px;',
            $this->attributionHtml
        );
    }
    
    public function getContentFileExtension()
    {
        return 'jpg';
    }
    
    public function getMimeType()
    {
        return 'image/jpeg';
    }
}
