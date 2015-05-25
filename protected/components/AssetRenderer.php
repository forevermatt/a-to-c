<?php

class AssetRenderer
{
    public function renderAssetOfExample(\AssetExample $assetExample)
    {
        $contentFilePath = $assetExample->getRealContentFilePath();
        
        if (extension_loaded('pecl_http')) {
            HttpResponse::setCache(true);
            HttpResponse::guessContentType($contentFilePath);
            HttpResponse::setFile($contentFilePath);
            HttpResponse::send();
        } else {
            header(sprintf(
                'Content-Type: %s',
                $assetExample->getMimeType()
            ));
            die(var_dump(readfile($contentFilePath)));
        }
    }
}
