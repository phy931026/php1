<!DOCTYPE html>
<html>
<head>
    <title>修改使用者</title>
</head>
<body>
<?php
error_reporting(0);       // 關閉錯誤訊息顯示
session_start();          // 啟用 session

// 檢查使用者是否登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    // 連接資料庫
    $conn = mysqli_connect("dbyfree.net", "immust", "immustimmust", "immust");

    // 從網址取得 id，查詢該使用者資料
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id='{$_GET['id']}'");
    $row = mysqli_fetch_array($result);

    // 顯示修改表單
    echo "
    <form method='post' action='20.user_edit.php'>
        <input type='hidden' name='id' value='{$row['id']}'>
        帳號：{$row['id']}<br>
        密碼：<input type='text' name='pwd' value='{$row['pwd']}'><p></p>
        <input type='submit' value='修改'>
    </form>
    ";

    // 關閉資料庫連線
    mysqli_close($conn);
}
?>
</body>
</html>
