<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Resource\Exception;

class ResourceException extends \Exception
{
    public static function managerNotFoundForClass(string $class): self
    {
        return new self(sprintf(
            'Model manager tidak ditemukan untuk class: "%s"',
            $class
        ));
    }
}
