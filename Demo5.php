<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/13
 * Time: 14:42
 */

class Demo5
{
   var $h;
   function Demo5($i = "iii"){
       $this->h = $i;
   }
   function show(){
       return $this->h;
   }
}
$j = new Demo5();
$jj = new Demo5("rrr");
echo $j->show();
echo $jj->show();