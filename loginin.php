<?php
$flag = true;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["username"];
    $pwd = $_POST["password"];
    if($name=='zhang' && $pwd == '222'){
        $flag = false;
    }
}
?>
<?php
    if ($flag) {
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
       <?php if ($_SERVER["REQUEST_METHOD"]=="POST"){
            echo "用户名或密码错误！";
         }
        ?>
        <form action="loginin.php" method="post">
            用户名<input type="text" name="username"/> <br/>
            密码 <input type="password" name="password"/> <br/>
            <!--          <input type="radio" name="sex" value="男">男-->
            <!--          <input type="radio" name="sex" value="女">女<br/>-->
            <!--          <input type="checkbox" name="hobby[]" value="篮球">篮球-->
            <!--          <input type="checkbox" name="hobby[]" value="足球">足球-->
            <!--          <input type="checkbox" name="hobby[]" value="排球">排球<br/>-->
            <!--          <select name="type[]" multiple="multiple">-->
            <!--              <option value="水产">水产</option>-->
            <!--              <option value="电信">电信</option>-->
            <!--              <option value="软件">软件</option>-->
            <!--              <option value="动科">动科</option>-->
            <!--          </select>-->
            <input type="submit" value="登录"/>
        </form>
        </body>
        </html>
<?php
    }else{
       echo  "登陆成功！";
    }
        ?>