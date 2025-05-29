<?php
error_reporting(0); // 關閉錯誤訊息
session_start();     // 啟用 Session

// 檢查使用者是否已登入
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    // 3 秒後跳轉到登入頁面
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
} else {
    // 建立資料庫連線
    // mysqli_connect(主機, 使用者, 密碼, 資料庫名稱)
    $conn = mysqli_connect("dbyfree.net", "immust", "immustimmust", "immust");

    // 檢查連線是否成功
    if (!$conn) {
        die("資料庫連線失敗: " . mysqli_connect_error());
    }

    // 組成 SQL 新增語法
    // 將表單送來的 id 與 pwd 寫入 user 表格中
    $sql = "INSERT INTO user (id, pwd) VALUES ('{$_POST['id']}', '{$_POST['pwd']}')";

    // 執行 SQL 新增語法
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤：" . mysqli_error($conn);
    } else {
        echo "新增使用者成功，三秒鐘後回到網頁";
        echo "<meta http-equiv='REFRESH' content='3; url=18.user.php'>";
    }

    // 關閉資料庫連線
    mysqli_close($conn);
}
?>
