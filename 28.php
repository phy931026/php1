<?php
error_reporting(0);        // 關閉錯誤訊息顯示
session_start();           // 啟用 session

// 檢查使用者是否登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 準備刪除佈告的 SQL 語法，從 GET 取得 bid
    $sql = "DELETE FROM bulletin WHERE bid='{$_GET["bid"]}'";

    // 執行 SQL 指令，刪除資料
    if (!mysqli_query($conn, $sql)) {
        echo "佈告刪除錯誤";
    } else {
        echo "佈告刪除成功";
    }

    // 三秒後返回佈告列表
    echo "<meta http-equiv='REFRESH' content='3; url=11.bulletin.php'>";
}
?>
