<!DOCTYPE html>
<html>
<head>
    <title>新增使用者</title>
</head>
<body>
<?php
// 關閉錯誤報告
error_reporting(0);

// 啟動 session
session_start();

// 檢查使用者是否已登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    // 三秒後跳轉到登入頁面
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    // 如果已登入，顯示新增使用者的表單
    echo "
    <form action='15.user_add.php' method='post'>
        帳號：<input type='text' name='id'><br>
        密碼：<input type='password' name='pwd'><p></p>
        <input type='submit' value='新增'>
        <input type='reset' value='清除'>
    </form>
    ";
}
?>
</body>
</html>
