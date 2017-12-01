<?php
//header={string:'content-type:text/html;charset=utf8'};
$user = $_GET['user'];
$pass = $_GET['pass'];
if ($user == "admin") {
    if ($pass == "123456") {
            echo "登入成功";
        }
    else {
            echo "登入错误";
        }
}
    else {
        echo "账号不存在";
    }
