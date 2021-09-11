<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Blog\Model;

use OpenSID\Resource\Contracts\ResourceInterface;
use OpenSID\Resource\Contracts\ResourceTrait;

class Agenda implements ResourceInterface
{
    use ResourceTrait;

    protected Artikel $artikel;

    protected \DateTimeInterface $tanggal;

    protected string $koordinator;

    protected string $lokasi;
}
