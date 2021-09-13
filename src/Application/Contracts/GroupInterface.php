<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\Contracts;

use OpenSID\Resource\Contracts\ResourceInterface;

interface GroupInterface extends ResourceInterface
{
    public function getRoles(): array;

    public function setRoles(array $roles): void;

    public function addRole(string $role): void;

    public function hasRole(string $role): bool;

    public function removeRole(string $role): void;
}
