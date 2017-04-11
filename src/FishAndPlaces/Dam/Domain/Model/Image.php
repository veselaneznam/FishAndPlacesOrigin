<?php

namespace FishAndPlaces\Dam\Domain\Model;

class Image
{
    protected $imageSrc;

    public function getAbsolutePath()
    {
        return null === $this->imageSrc
            ? null
            : $this->getUploadRootDir().$this->imageSrc;
    }

    public function getWebPath()
    {
        return null === $this->imageSrc
            ? null
            : $this->getUploadDir() . $this->imageSrc;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return '/uploads/images/';
    }
}
