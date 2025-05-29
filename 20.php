<?php
error_reporting(0); // 關閉錯誤訊息顯示
session_start();    // 啟用 session

// 檢查是否登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    // 建立資料庫連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗：" . mysqli_connect_error());
    }

    // 更新使用者密碼的 SQL 指令
    $sql = "UPDATE user SET pwd='{$_POST['pwd']}' WHERE id='{$_POST['id']}'";

    // 執行 SQL 指令，並判斷是否成功
    if (!mysqli_query($conn, $sql)) {
        echo "修改錯誤";
        echo "<meta http-equiv='REFRESH' content='3; url=18.user.php'>";
    } else {
        echo "修改成功，三秒鐘後回到網頁";
        echo "<meta http-equiv='REFRESH' content='3; url=18.user.php'>";
    }

    // 關閉資料庫連線
    mysqli_close($conn);
}
?>
