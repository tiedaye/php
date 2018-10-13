<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/13
 * Time: 20:23
 */
function test($name = "shuang"){
//    echo "$name zhang";
}
test();
test("tao");
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];