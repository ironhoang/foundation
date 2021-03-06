<?php
namespace LaravelRocket\Foundation\Helpers\Production;

use LaravelRocket\Foundation\Helpers\ArrayHelperInterface;

class ArrayHelper implements ArrayHelperInterface
{
    public function popWithKey(string $key, array &$array, $default = null)
    {
        if (array_key_exists($key, $array)) {
            $ret = $array[$key];
            unset($array[$key]);
        } else {
            $ret = $default;
        }

        return $ret;
    }
}
