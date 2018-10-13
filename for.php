<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/13
 * Time: 19:32
 */
//for($x=1;$x<10;$x++){
//    echo $x;
//}
//遍历索引数组
$a = array(1,2,3,4);
foreach($a as $value){
    echo "$value<br>";
}
//遍历关联数组
$a = array(1=>"111",2=>"222",3=>"333",4=>4);
foreach($a as $index=>$index_value){
    echo "key = ". $index . " value = ". $index_value . "<br>";
}

//$b = array("555","666","777","888");
//for($c = 0;$c<count($b);$c++){
//    echo $b[$c];
//}