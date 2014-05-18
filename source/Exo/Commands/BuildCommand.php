<?php namespace Exo\Commands;

use Horse\Command, Horse\Input, Horse\Output;
use Exo\Filesystem, Exo\Builder;

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
     * The Builder instance.
     *
     * @var Builder
     */
    protected $builder;

    /**
     * The constructor.
     *
     * @param Filesystem|null $filesystem
     * @param Builder|null $builder
     * @return BuildCommand
     */
    public function __construct(Filesystem $filesystem = null, Builder $builder = null)
    {
        parent::__construct();

        $this->filesystem = $filesystem ?: new Filesystem;

        $this->builder = $builder ?: new Builder;
    }

    /**
     * {@inheritdoc}
     */
    public function go(Input $input, Output $output)
    {
        $in  = $input('in')  ?: 'examples.php';
        $out = $input('out') ?: 'examples.md';

        $output("Building $out from $in...");

        $built = $this->build($in, $out);

        $output($built ? "<info>Finished</info>" : "<error>Failed</error>");
    }

    /**
     * Build a Markdown document.
     *
     * @param string $in
     * @param string $out
     * @return boolean
     */
    protected function build($in, $out)
    {
        $workDir = getenv('WORK_DIR').'/';

        $content = $this->filesystem->read($workDir.$in);

        $document = $this->builder->build($content);

        return $this->filesystem->overwrite($document);
    }

}

