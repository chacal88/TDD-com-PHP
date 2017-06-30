<?php
/**
 * Created by PhpStorm.
 * User: chacal
 * Date: 30/06/17
 * Time: 15:18
 */

namespace QueryBuilder\Mysql;


class Filters
{
    private $sql = [];

    public function where(string $fields,string $condition,$value)
    {
        $query = 'WHERE %s%s%s';
        $this->sql[] = sprintf($query,$fields,$condition,$value);
        return $this;
    }

    public function orderBy(string $field, string $order)
    {
        $query = 'ORDER BY %s %s';
        $this->sql[] = sprintf($query,$field,$order);
        return $this;
    }

    public function getSql():string
    {
        return implode(' ',$this->sql);
    }


}