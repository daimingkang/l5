<?php
/**
 * Created by PhpStorm.
 * User: VIROYAL_M4000
 * Date: 2016/8/10
 * Time: 16:19
 */
namespace App\Transformer;

abstract class  Transformer
{


//array_map() 函数将用户自定义函数作用到数组中的每个值上，并返回用户自定义函数作用后的带有新值的数组
    public function transforms($items)
    {
        return array_map([$this,'transform'], $items);
    }


    public abstract function transform($item);

}