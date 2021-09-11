<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Security;

use Doyo\Bundle\Modular\Application\ModuleInterface;
use Doyo\Bundle\Modular\Application\ModuleTrait;
use OpenSID\Security\Contracts\GroupInterface;
use OpenSID\Security\Contracts\UserInterface;
use OpenSID\Security\Model\Group;
use OpenSID\Security\Model\User;

class UserModule implements ModuleInterface
{
    use ModuleTrait;

    public function getResolveTargetEntities(): array
    {
        return [
            UserInterface::class => User::class,
            GroupInterface::class => Group::class,
        ];
    }
}
