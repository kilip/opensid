<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Application\Controller;

use OpenSID\Application\Controller\UpdateConfigController;
use OpenSID\Application\Model\Config;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class UpdateConfigControllerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(UpdateConfigController::class);
    }

    public function its_invoke_should_return_config_data(
        Request $request,
        ParameterBag $parameterBag,
        Config $config
    ) {
        $request->attributes = $parameterBag;
        $parameterBag->get('data')
            ->shouldBeCalled()->willReturn($config);

        $this($request)->shouldReturn($config);
    }
}
