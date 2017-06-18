<?php

/*
 * This file is part of the Glavweb UploaderBundle package.
 *
 * (c) Andrey Nilov <nilov@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glavweb\UploaderBundle\Provider;

use Glavweb\UploaderBundle\File\FileInterface;

/**
 * Interface ProviderFileInterface
 *
 * @package Glavweb\UploaderBundle
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
interface ProviderFileInterface extends ProviderInterface
{
    /**
     * @return FileInterface
     */
    public function getFile();
}