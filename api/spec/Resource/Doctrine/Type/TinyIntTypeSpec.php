<?php

namespace spec\OpenSID\Resource\Doctrine\Type;

use OpenSID\Resource\Doctrine\Type\TinyIntType;
use PhpSpec\ObjectBehavior;

class TinyIntTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TinyIntType::class);
    }
}
