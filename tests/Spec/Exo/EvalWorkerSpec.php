<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class EvalWorkerSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\EvalWorker');
    }

    function it_evaluates_given_code()
    {
        $this->evaluate('$foo = null')->shouldReturn('NULL');
        $this->evaluate('15 + 2')->shouldReturn('17');
        $this->evaluate('pow(12, 2)')->shouldReturn('144');
    }

}

