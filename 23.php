<?php
    error_reporting(0); // 關閉錯誤訊息顯示
    session_start();     // 啟動 session 機制

    if (!$_SESSION["id"]) { // 如果沒有登入（session 沒有 id）
        echo "please login first"; // 提示使用者先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; // 三秒後導向登入頁面
    } else {
        // 建立與資料庫的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立 SQL 指令，插入 bulletin 資料表
        $sql = "insert into bulletin(title, content, type, time)
                values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        // 執行 SQL 指令，檢查是否成功
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤"; // 若失敗，顯示錯誤訊息
        } else {
            echo "新增佈告成功，三秒鐘後回到網頁"; // 若成功，提示訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; // 三秒後返回佈告列表
        }
    }
?>
