<?php

namespace FishAndPlaces\GreenObject\Domain\Model;

class Image
{
    const DEFAULT_IMAGE = 'uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg';

    /**
     * @var string
     */
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
            ? static::DEFAULT_IMAGE
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

    /**
     * @param string $imageSrc
     *
     * @return Image
     */
    public function setImageSrc(string $imageSrc) : Image
    {
        $this->imageSrc = $imageSrc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
    }

    public function __toString()
    {
        return $this->imageSrc;
    }
}
