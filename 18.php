<!DOCTYPE html>
<html>
<head>
    <title>使用者管理</title>
</head>
<body>
<?php
error_reporting(0); // 關閉錯誤訊息
session_start();     // 啟用 Session

// 檢查是否登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    echo "<h1>使用者管理</h1>";
    echo "［<a href='14.user_add_form.php'>新增使用者</a>］［<a href='11.bulletin.php'>回佈告欄列表</a>］<br>";

    // 顯示使用者資料表格
    echo "<table border='1'>";
    echo "<tr><td>操作</td><td>帳號</td><td>密碼</td></tr>";

    // 連接資料庫
    $conn = mysqli_connect("dbafree.net", "immust", "immustimmust", "immust");

    // 查詢所有使用者
    $result = mysqli_query($conn, "SELECT * FROM user");

    // 顯示每一筆資料
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>
                <a href='19.user_edit_form.php?id={$row['id']}'>編輯</a> ||
                <a href='17.user_delete.php?id={$row['id']}'>刪除</a>
              </td>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['pwd']}</td>";
        echo "</tr>";
    }

    echo "</table>";

    // 關閉資料庫連線
    mysqli_close($conn);
}
?>
</body>
</html>
