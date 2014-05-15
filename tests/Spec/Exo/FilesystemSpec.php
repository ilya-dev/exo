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

    function it_throws_an_exception_if_reading_failed()
    {
        $this->shouldThrow('RuntimeException')->duringRead('gibberish');
    }

}

namespace Exo;

function file_get_contents($file)
{
    return $file;
}

function is_readable($file)
{
    return 'foo' == $file;
}

