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
use OpenSID\Application\Contracts\UserInterface;

class User implements UserInterface
{
    /**
     * @var int|string
     */
    protected $id;
    protected string $username;
    protected string $email;
    protected ?string $password              = null;
    protected ?string $plainPassword         = null;
    protected ?GroupInterface $group         = null;
    protected ?\DateTimeInterface $lastLogin = null;
    protected bool $active                   = true;
    protected ?string $nama                  = null;
    protected ?string $company               = null;
    protected ?string $phone                 = null;
    protected ?string $foto                  = null;
    protected ?string $session               = null;
    protected int $oldId;

    /**
     * @var string[]
     */
    protected array $roles = [];

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * TODO: remove when migration is completed.
     */
    public function getOldId(): int
    {
        return $this->oldId;
    }

    public function removeRole(string $role): void
    {
        if (false !== $key = array_search(strtoupper($role), $this->getRoles(), true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }
    }

    public function hasRole(string $role): bool
    {
        return \in_array(strtoupper($role), $this->getRoles(), true);
    }

    public function addRole(string $role): void
    {
        if ( ! $this->hasRole($role)) {
            $this->roles[] = $role;
        }
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @psalm-suppress MixedReturnTypeCoercion
     */
    public function getRoles()
    {
        $group   = $this->group;
        $roles   = $this->roles;

        if (null !== $group) {
            $roles = array_merge($roles, $group->getRoles());
        }

        $roles[] = self::ROLE_DEFAULT;
        return array_values(array_unique($roles));
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
    }

    public function getSession(): ?string
    {
        return $this->session;
    }

    public function setSession(?string $session): void
    {
        $this->session = $session;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    public function getGroup(): ?GroupInterface
    {
        return $this->group;
    }

    public function setGroup(?GroupInterface $group): void
    {
        $this->group = $group;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): void
    {
        $this->lastLogin = $lastLogin;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(?string $nama): void
    {
        $this->nama = $nama;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): void
    {
        $this->foto = $foto;
    }
}
