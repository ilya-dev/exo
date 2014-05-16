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
        return explode("\n\n", $content);
    }

}
