<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Blog\Model;

use OpenSID\Application\Contracts\UserInterface;

class Artikel
{
    protected int $id;
    protected string $isi;
    protected bool $enabled = true;
    protected \DateTimeInterface $tanggalUpload;
    protected Kategori $kategori;
    protected UserInterface $user;
    protected string $judul;
    protected ?int $headline   = 0;
    protected ?string $gambar  = null;
    protected ?string $gambar1 = null;
    protected ?string $gambar2 = null;
    protected ?string $gambar3 = null;
    protected ?string $dokumen;
    protected ?string $linkDokumen;
    protected bool $bolehKomentar = true;
    protected ?string $slug       = null;
    protected int $hit            = 0;
}
