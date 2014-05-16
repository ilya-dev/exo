<?php namespace Exo;

class Parser {

    /**
     * Extract all examples from given $content.
     *
     * @param string $content
     * @return array
     */
    public function extractExamples($content)
    {
        // So that you can separate examples
        // by an empty line.
        $examples = explode("\n\n", $content);

        $examples = array_filter($examples, function($example)
        {
            // Remove all \n's and see if
            // $example is still not empty.
            return str_replace("\n", "", $example);
        });

        // Recreate $examples to fix index order.
        // Array_filter won't do it for you.
        return array_values($examples);
    }

}
