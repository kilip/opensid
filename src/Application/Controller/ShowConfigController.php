<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Application\Controller;

use OpenSID\Application\Model\Config;
use Symfony\Component\HttpFoundation\Request;

class ShowConfigController
{
    /**
     * @psalm-suppress MixedReturnStatement
     * @psalm-suppress MixedInferredReturnType
     */
    public function __invoke(
        Request $request
    ): Config {
        return $request->attributes->get('data');
    }
}
