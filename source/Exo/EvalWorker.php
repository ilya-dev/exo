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

        return var_export($result, true);
    }

}

