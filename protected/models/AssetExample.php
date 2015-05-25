<?php

abstract class AssetExample extends Example
{
    public abstract function getContentFileExtension();
    
    public function getRealContentFilePath()
    {
        return realpath(sprintf(
            '%s/%s.%s',
            $this->folder,
            (int)$this->id,
            $this->getContentFileExtension()
        ));
    }
}
