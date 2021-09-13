<?php

namespace spec\OpenSID\Resource\Operation;

use ApiPlatform\Core\Operation\PathSegmentNameGeneratorInterface;
use OpenSID\Resource\Operation\SingularPathSegmentNameGenerator;
use PhpSpec\ObjectBehavior;

class SingularPathSegmentNameGeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SingularPathSegmentNameGenerator::class);
    }

    function it_should_implement_path_segment_name_generator_interface()
    {
        $this->shouldImplement(PathSegmentNameGeneratorInterface::class);
    }

    public function it_should_returns_valid_segment_name()
    {
        $name = "artikel";

        $this->getSegmentName($name, true)->shouldReturn('artikel');
        $this->getSegmentName($name, false)->shouldReturn('artikel');
    }
}
