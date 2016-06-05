<?php
/**自定义函数
 * User: Yuan
 * Date: 2016-6-5
 * Time: 16:20:24
 */


function p($arr,$is_end=false)
{
    if($is_end){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        die;
    }else{
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

function v($arr,$is_end=false)
{
    if($is_end){
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
        die;
    }else{
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
    }
}