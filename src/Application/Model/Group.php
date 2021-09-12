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
    private array $roles = [];
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

    public function addRole(string $role): void
    {
        if ( ! $this->hasRole($role)) {
            $this->roles[] = $role;
        }
    }

    public function hasRole(string $role): bool
    {
        return \in_array(strtoupper($role), $this->getRoles(), true);
    }

    public function removeRole(string $role): void
    {
        if (false !== $key = array_search(strtoupper($role), $this->getRoles(), true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }
}
