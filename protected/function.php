<?php
/**自定义函数
 * User: Yuan
 * Date: 2016-6-5
 * Time: 16:20:24
 */


function p($arr,$is_end=0)
{
    if($is_end=1){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";

    }else{
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        die;
    }
}

function v($arr,$is_end=0)
{
    if($is_end=1){
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
    }else{
        echo "<pre>";
        var_dump($arr);
        echo "</pre>";
        die;
    }
}