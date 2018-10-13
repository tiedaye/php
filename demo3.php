<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/13
 * Time: 14:28
 */
function test(){
    static $b = 1;
    $c = "ccc";
    $b++;
    print $b;
    echo $b,$c;
    echo "<br>";
    echo print $b;
}
test();