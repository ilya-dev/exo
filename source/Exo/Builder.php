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
        $examples = $this->parser->extractExamples($content);

        for ($i = 0; $i < count($examples); $i++)
        {
            $examples[$i] =
                "## Example #".($i + 1)."\n\n".$this->buildBlock($examples[$i]);
        }

        return "# Examples\n\n".implode("\n", $examples);
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

        foreach (array_filter($lines) as $line)
        {
            $result[] = $this->printer->toString(
                eval ("return {$line};")
            );
        }

        return sprintf(
            "```php\n%s```\n```\n%s\n```\n",
            implode("\n", $lines),
            implode("\n", $result)
        );
    }

}

