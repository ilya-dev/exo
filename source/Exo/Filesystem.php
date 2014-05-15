<?php namespace Exo;

class Filesystem {

    /**
     * Read a file.
     *
     * @param string $file
     * @return mixed
     */
    public function read($file)
    {
        return file_get_contents($file);
    }

}

