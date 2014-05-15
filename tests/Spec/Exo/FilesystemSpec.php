<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class FilesystemSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Filesystem');
    }

}

