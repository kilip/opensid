<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\Model;

use OpenSID\Application\Contracts\GroupInterface;

class Group implements GroupInterface
{
    /**
     * @var int|string
     */
    private $id;
    private string $nama;
    private array $roles;
    private int $oldId;

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    public function getOldId(): int
    {
        return $this->oldId;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function getRoles(): array
    {
        $roles   = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }
}
