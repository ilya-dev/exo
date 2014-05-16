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

        $this->extractExamples("<?php\nfoo\nbar")->shouldReturn(["foo\nbar"]);

        $this->exampleExamples("<?\n\n\nfoo\nbar")->shouldReturn(["foo\nbar"]);

        $this->extractExamples("foo\nbar\n\nbaz")->shouldReturn(["foo\nbar", "baz"]);

        $this->extractExamples("foo\n\n\n\nbar")->shouldReturn(["foo", "bar"]);
    }

    function it_splits_an_example_into_lines()
    {
        $this->splitIntoLines("foo\nbar\nbaz")->shouldReturn(["foo", "bar", "baz"]);
    }

}
