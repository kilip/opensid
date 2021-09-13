<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application;

use Doyo\Bundle\Modular\Application\ModuleInterface;
use Doyo\Bundle\Modular\Application\ModuleTrait;
use OpenSID\Application\Contracts\GroupInterface;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Application\Model\Group;
use OpenSID\Application\Model\User;

class ApplicationModule implements ModuleInterface
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
