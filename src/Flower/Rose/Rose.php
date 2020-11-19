<?php

/**
 * Created by PhpStorm.
 * User: qiaohuan
 * Date: 2020/11/19
 * Time: 13:46
 */
namespace Flower\Rose;
class Rose
{
    public function desc()
    {
        echo "this is rose flower";
    }
    //两数相减
    public function sub($a, $b)
    {
        return $a - $b;
    }
	//两数相加
    public function sum($a, $b)
    {

        return $a + $b;
    }
}
