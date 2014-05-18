<?php namespace Exo;

class Builder {

    /**
     * The Parser instance.
     *
     * @var Parser
     */
    protected $parser;

    /**
     * The Printer instance.
     *
     * @var Printer
     */
    protected $printer;

    /**
     * The constructor.
     *
     * @param Parser|null $parser
     * @param Printer|null $printer
     * @return Builder
     */
    public function __construct(Parser $parser = null, Printer $printer = null)
    {
        $this->parser = $parser ?: new Parser;

        $this->printer = $printer ?: new Printer;
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
        $lines = $this->parser->splitIntoLines($code);
        $result = [];

        foreach ($lines as $line)
        {
            $result[] = $this->printer->toString(
                eval ("return {$line};")
            );
        }

        return sprintf(
            "```php\n%s\n```\n```\n%s\n```",
            implode("\n", $lines),
            implode("\n", $result)
        );
    }

}

