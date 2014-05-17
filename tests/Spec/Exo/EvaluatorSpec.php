<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class EvaluatorSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Evaluator');
    }

    function it_evaluates_given_code()
    {
        $this->evaluate('$foo = null')->shouldReturn('NULL');
        $this->evaluate('15 + 2')->shouldReturn('17');
        $this->evaluate('pow(12, 2)')->shouldReturn('144');

        $this->evaluate('new stdClass')->shouldMatch('/[object:stdClass:(\w+)]/');

        $this->evaluate('["foo" => 42]')
             ->shouldReturn("array (\n  'foo' => 42,\n)");
    }

}

