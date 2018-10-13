<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/13
 * Time: 16:47
 */
$array1 = array("2","3");
$array2 = array("4","5","6");
$array3 = $array1 + $array2;
//var_dump($array3);
$array4 = array(4,5,6,2);
sort($array4);
//var_dump($array4);
$a = array(7=>"111",2=>"222",8=>"333",4=>4);
asort($a);
var_dump($a);