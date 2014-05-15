<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class FilesystemSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Filesystem');
    }

    function it_reads_a_file()
    {
        $this->read('foo')->shouldReturn('foo');
    }

}

namespace Exo;

function file_get_contents($file)
{
    return $file;
}

