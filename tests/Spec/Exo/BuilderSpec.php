<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class BuilderSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Builder');
    }

}
