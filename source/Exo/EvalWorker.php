<?php namespace Exo;

class EvalWorker {

    /**
     * Evaluate given $code.
     *
     * @param string $code
     * @return mixed
     */
    public function evaluate($code)
    {
        return $this->toString(eval ("return {$code};"));
    }

    /**
     * Convert given $value to a string.
     *
     * @param mixed $value
     * @return string
     */
    protected function toString($value)
    {
        if (is_object($value))
        {
            return sprintf(
                "[object:%s:%s]", get_class($value), spl_object_hash($value)
            );
        }

        return var_export($value, true);
    }

}

