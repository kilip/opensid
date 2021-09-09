<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\User\Model;

use OpenSID\User\Contracts\GroupInterface;

class User
{
    protected string $id;
    protected string $username;
    protected ?string $password;
    protected ?string $plainPassword;
    protected GroupInterface $group;
    protected string $email;
    protected string $nama;

    public function __construct(
        string $username,
        string $email,
        ?string $plainPassword = null
    ) {
        $this->username      = $username;
        $this->email         = $email;
        $this->plainPassword = $plainPassword;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }
}
