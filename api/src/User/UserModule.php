<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\User;

use Doyo\Bundle\Modular\Application\ModuleInterface;
use Doyo\Bundle\Modular\Application\ModuleTrait;
use OpenSID\User\Contracts\GroupInterface;
use OpenSID\User\Contracts\UserInterface;
use OpenSID\User\Model\Group;
use OpenSID\User\Model\User;

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
