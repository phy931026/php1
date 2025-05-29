<?php
error_reporting(0);     // 關閉錯誤訊息
session_start();        // 啟用 session

// 檢查是否登入
if (!$_SESSION["id"]) {
    echo "請先登入帳號";
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    // 如果已登入，顯示新增佈告表單
    echo "
    <html>
    <head><title>新增佈告</title></head>
    <body>
    <form method='post' action='23.bulletin_add.php'>
        題目：<input type='text' name='title'><br>
        內容：<br>
        <textarea name='content' rows='10' cols='40'></textarea><br>
        佈告類型：
        <input type='radio' name='type' value='1'>系上公告
        <input type='radio' name='type' value='2'>獲獎資訊
        <input type='radio' name='type' value='3'>徵才資訊<br>
        發布時間：<input type='date' name='time'><p></p>
        <input type='submit' value='新增佈告'>
        <input type='reset' value='清除'>
    </form>
    </body>
    </html>
    ";
}
?>
