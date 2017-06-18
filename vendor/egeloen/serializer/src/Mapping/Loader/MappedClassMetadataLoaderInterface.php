<?php

/*
 * This file is part of the Ivory Serializer package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Serializer\Mapping\Loader;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
interface MappedClassMetadataLoaderInterface extends ClassMetadataLoaderInterface
{
    /**
     * @return string[]
     */
    public function getMappedClasses();
}
