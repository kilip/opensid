<?php

namespace spec\OpenSID\Application\Controller;

use OpenSID\Application\Controller\UpdateConfigController;
use OpenSID\Application\Model\Config;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class UpdateConfigControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UpdateConfigController::class);
    }

    function its_invoke_should_return_config_data(
        Request $request,
        ParameterBag $parameterBag,
        Config $config
    )
    {
        $request->attributes = $parameterBag;
        $parameterBag->get('data')
            ->shouldBeCalled()->willReturn($config);

        $this($request)->shouldReturn($config);
    }
}
