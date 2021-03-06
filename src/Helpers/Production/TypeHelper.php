<?php
namespace LaravelRocket\Foundation\Helpers\Production;

use LaravelRocket\Foundation\Helpers\TypeHelperInterface;

class TypeHelper implements TypeHelperInterface
{
    public function getColumnTypeNameByValue(string $type, array $types, $default = '')
    {
        foreach ($types as $info) {
            if ($info['value'] === $type) {
                return trans(array_get($info, 'name'));
            }
        }

        return $default;
    }

    public function getColumnTypes(string $table, string $column)
    {
        $ret   = [];
        $types = config('data.tables.'.$table.'.columns.'.$column.'.options', []);
        foreach ($types as $key => $name) {
            $ret[$key] = trans($name);
        }

        return $ret;
    }
}
