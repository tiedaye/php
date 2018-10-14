<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/14
 * Time: 16:41
 */
$con = mysqli_connect("localhost:3306","root","");
mysql_query("CREATE DATABASE my_db",$con);
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";
mysql_query($sql,$con);

mysql_close($con);
