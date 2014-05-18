<?php namespace Exo;

class Printer {

    /**
     * Convert given $value to a string.
     *
     * @param mixed $value
     * @return string
     */
    public function toString($value)
    {
        switch (gettype($value))
        {
            case 'object':
                return $this->objectToString($value);
            default:
                return var_export($value, true);
        }
    }

    /**
     * Convert given $object to a string.
     *
     * @param mixed $object
     * @return string
     */
    protected function objectToString($object)
    {
        return sprintf(
            "[object:%s:%s]", get_class($object), spl_object_hash($object)
        );
    }

}

