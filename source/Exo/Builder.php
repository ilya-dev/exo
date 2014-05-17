<?php namespace Exo;

class Builder {

    /**
     * The Parser instance.
     *
     * @var Parser
     */
    protected $parser;

    /**
     * The Evaluator instance.
     *
     * @var Evaluator
     */
    protected $evaluator;

    /**
     * The constructor.
     *
     * @param Parser|null $parser
     * @param Evaluator|null $evaluator
     * @return Builder
     */
    public function __construct(Parser $parser = null, Evaluator $evaluator = null)
    {
        $this->parser = $parser ?: new Parser;

        $this->evaluator = $evaluator ?: new Evaluator;
    }

    /**
     * Build a Markdown document from given $content.
     *
     * @param string $content
     * @return string
     */
    public function build($content)
    {
        // I will write code for this method a bit later...
    }

    /**
     * Build an example block.
     *
     * @param string $code
     * @return string
     */
    public function buildBlock($code)
    {

    }

}

