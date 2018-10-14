<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .error{
        color: red;
    }
</style>
<body>
    用户名<input type="text" id="username">
            <span class="error name-err"></span><br>
    密码 <input type="password" id="pwd1"> <br>
    确认密码 <input type="password" id="pwd2"> <br>
    <button type="submit" id="btn">注册</button>
    <script src="jquery-1.12.4.js"></script>
    <script>
        $(function () {
            $("#btn").on("click",function () {
                var username = $("#username").val();
                var pwd1 = $("#pwd1").val();
                var pwd2 = $("#pwd2").val();
                $.post("serve.php",{
                    username:username,
                    pwd1:pwd1,
                    pwd2:pwd2
                },function (data) {
                    if(data == "name-err"){
                        $(".name-err").html("用户名密码不能为空");
                    }else if(data == "pwd1-err"){
                        $(".name-err").html("密码不能为空");
                    }else if(data == "pwd2-err"){
                        $(".name-err").html("确认密码不能为空");
                    }else if(data == "pwd-err"){
                        $(".name-err").html("两次输入密码不一致");
                    }else{
                        $(".name-err").html("success");
                    }

                },"text")
            })

        })

    </script>
</body>
</html>