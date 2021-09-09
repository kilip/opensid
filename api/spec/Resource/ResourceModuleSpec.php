<?php

namespace spec\OpenSID\Resource;

use OpenSID\Resource\ResourceModule;
use PhpSpec\ObjectBehavior;

class ResourceModuleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ResourceModule::class);
    }
}
