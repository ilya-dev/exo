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

        if (is_array($result))
        {
            $result = var_export($result, true);

            $callback = function(array $matches)
            {
                $content = end($matches);

                $content = str_replace(PHP_EOL, '', $content) ? $content : '';

                return "[{$content}]";
            };

            return preg_replace_callback('/array \((.*)\)/s', $callback, $result);
        }

        return var_export($result, true);
    }

}

