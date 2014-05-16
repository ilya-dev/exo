<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class ParserSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Parser');
    }

    function it_extracts_examples_from_a_string()
    {
        $this->extractExamples("foo\nbar")->shouldReturn(["foo\nbar"]);
    }

}
