<?php

/*
 * This file is part of the Ivory Serializer package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\Serializer\Mapping\Annotation;

/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY", "METHOD"})
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class Readable
{
    /**
     * @var bool
     */
    public $readable = true;
}
