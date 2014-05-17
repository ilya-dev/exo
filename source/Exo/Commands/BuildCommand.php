<?php namespace Exo\Commands;

use Horse\Command, Horse\Input, Horse\Output;
use Exo\Filesystem;

/**
 * @name build
 * @desc Build a Markdown document
 * @sign {in:optional:"PHP file you want to convert"} {out:optional:"Markdown file you want to create"}
 */
class BuildCommand extends Command {

    /**
     * The Filesystem instance.
     *
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * The constructor.
     *
     * @param Filesystem|null $filesystem
     * @return BuildCommand
     */
    public function __construct(Filesystem $filesystem = null)
    {
        parent::__construct();

        $this->filesystem = $filesystem ?: new Filesystem;
    }

    /**
     * {@inheritdoc}
     */
    public function go(Input $input, Output $output)
    {
        $in  = $input('in')  ?: 'examples.php';
        $out = $input('out') ?: 'examples.md';

        $output("Building $out from $in...");
    }

}

