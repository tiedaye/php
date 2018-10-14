<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/14
 * Time: 9:36
 */
//$name = $_POST["username"];
//$pwd = $_POST["password"];
//$sex = $_POST["sex"];
//$hobby = $_POST["hobby"];
//$type = $_POST["type"];
//echo "用户名是" . $name . "密码是：" . $pwd,$sex;
//echo "<br/>";
//var_dump($hobby,$type);
//if($name=='zhang' && $pwd == '222'){
//    echo "登录成功";
//}else{
//    echo "用户名或密码错误";
//}
$name = $_POST["username"];
$pwd1 = $_POST["pwd1"];
$pwd2 = $_POST["pwd2"];
if ($name == ""){
    echo "name-err";
}elseif($pwd1 == ""){
    echo "pwd1-err";
}elseif($pwd2 == ""){
    echo "pwd2-err";
}elseif($pwd2 != $pwd1){
    echo "pwd-err";
}else{
    echo "success！";
}
