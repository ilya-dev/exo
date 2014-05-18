<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class PrinterSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Printer');
    }

    function it_evaluates_given_code()
    {
        $this->toString(null)->shouldReturn('NULL');

        $this->toString(17)->shouldReturn('17');

        $this->toString(12.4)->shouldReturn('12.4');

        $this->toString(new \stdClass)->shouldMatch('/[object:stdClass:(\w+)]/');

        $this->toString(['foo' => 42])->shouldReturn("array (\n  'foo' => 42,\n)");
    }

}

