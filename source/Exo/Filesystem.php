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
     * Append to a file.
     *
     * @param string $file
     * @param string $content
     * @return integer
     */
    public function append($file, $content)
    {
        return file_put_contents($file, $content, FILE_APPEND);
    }

}

