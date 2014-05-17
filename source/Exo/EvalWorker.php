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
        $result = eval ("return {$code};");

        if (is_object($result))
        {
            return sprintf(
                "[object:%s:%s]", get_class($result), spl_object_hash($result)
            );
        }

        return var_export($result, true);
    }

}

