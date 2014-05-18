<?php namespace Exo;

use RuntimeException;

class Filesystem {

    /**
     * Read a file.
     *
     * @throws RuntimeException
     * @param string $file
     * @return string
     */
    public function read($file)
    {
        if ( ! is_readable($file))
        {
            throw new RuntimeException(
                "File {$file} is not readable or does not exist."
            );
        }

        return file_get_contents($file);
    }

    /**
     * Overwrite a file.
     *
     * @throws RuntimeException
     * @param string $file
     * @param string $content
     * @return void
     */
    public function overwrite($file, $content)
    {
        $written = file_put_contents($file, $content);

        // If $content is not empty
        // but nothing was written to $file
        // throw an exception.
        if ($content and ! $written)
        {
            throw new RuntimeException(
                "Unable to write to {$file}."
            );
        }
    }

}

