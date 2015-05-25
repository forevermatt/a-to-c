<?php

class ImageExample extends AssetExample
{
    public function getContentAsHtml()
    {
        return sprintf(
            '<img src="%s" class="img-responsive center-block" style="%s" />',
            \Yii::app()->createUrl('learn/asset', array(
                'slug' => $this->question->urlSlug,
                'exampleId' => $this->id,
            )),
            'max-height: 360px;'
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
