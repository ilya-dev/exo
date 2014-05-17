<?php namespace Spec\Exo;

use PhpSpec\ObjectBehavior;

class BuilderSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Exo\Builder');
    }

    function it_builds_an_example_block()
    {
        $this->buildBlock($code = "\$bar = 42;\n\$bar;")
             ->shouldReturn("```php\n{$code}\n```\n```\n42\n42```");
    }

    function it_builds_a_Markdown_document()
    {
        // TODO: write a test
    }

}

