<?php namespace Exo\Commands;

use Horse\Command, Horse\Input, Horse\Output;

/**
 * @name build
 * @desc Build a Markdown document
 * @sign {in:required:"PHP file you want to convert"} {out:optional:"Markdown file you want to create"}
 */
class BuildCommand extends Command {

    /**
     * {@inheritdoc}
     */
    public function go(Input $input, Output $output)
    {
        $in  = $input('in');
        $out = $input('out');

        $output("Building $out from $in...");
    }

}

