<?php

namespace FishAndPlaces\GreenObject\Application\Core;

use FishAndPlaces\GreenObject\Domain\Repository\RemoveExifFromImageRepository;
use FishAndPlaces\GreenObject\Domain\Value\ImageDecorator\Color;
use FishAndPlaces\GreenObject\Infrastructure\Repository\GregwarImage\GregwarImageDecorator;
use Gregwar\Image\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    /**
     * @var string
     */
    private $targetDir;

    /**
     * @var RemoveExifFromImageRepository
     */
    private $exifRemover;

    /**
     * FileUploader constructor.
     * @param RemoveExifFromImageRepository $exifRemover
     * @param $targetDir
     */
    public function __construct(
        RemoveExifFromImageRepository $exifRemover,
        $targetDir
    )
    {
        $this->targetDir = $targetDir;
        $this->exifRemover = $exifRemover;
    }

    public function upload(UploadedFile $file)
    {
        $file = $this->exifRemover->processImage($file);

        $fileName = md5(uniqid()) . '.' . $file->getClientOriginalExtension();

        $file->move($this->targetDir, $fileName);

        return $fileName;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }
}
