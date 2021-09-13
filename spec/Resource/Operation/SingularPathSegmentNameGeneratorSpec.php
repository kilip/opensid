<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\OpenSID\Resource\Operation;

use ApiPlatform\Core\Operation\PathSegmentNameGeneratorInterface;
use OpenSID\Resource\Operation\SingularPathSegmentNameGenerator;
use PhpSpec\ObjectBehavior;

class SingularPathSegmentNameGeneratorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(SingularPathSegmentNameGenerator::class);
    }

    public function it_should_implement_path_segment_name_generator_interface()
    {
        $this->shouldImplement(PathSegmentNameGeneratorInterface::class);
    }

    public function it_should_returns_valid_segment_name()
    {
        $name = 'artikel';

        $this->getSegmentName($name, true)->shouldReturn('artikel');
        $this->getSegmentName($name, false)->shouldReturn('artikel');
    }
}
