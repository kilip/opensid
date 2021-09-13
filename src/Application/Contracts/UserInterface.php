<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\Contracts;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface as BaseUserInterface;

interface UserInterface extends PasswordAuthenticatedUserInterface, BaseUserInterface
{
    public const ROLE_DEFAULT = 'ROLE_USER';
    public const ROLE_ADMIN   = 'ROLE_ADMIN';

    /**
     * @return int|string
     */
    public function getId();

    public function getPlainPassword(): ?string;

    public function setPassword(string $password): void;

    public function hasRole(string $role): bool;

    public function addRole(string $role): void;

    public function removeRole(string $role): void;

    /**
     * @param string[] $roles
     */
    public function setRoles(array $roles): void;
}
