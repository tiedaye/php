<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/13
 * Time: 14:22
 */
$x = "ssss";
$y = "yyyy";
$z = $x . $y;
echo $x;
echo($y);
echo $z;
function test(){
    $a = "aaaa";
    global $x;
    echo $a;
    echo $x;
}
test();