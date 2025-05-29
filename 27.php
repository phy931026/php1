<?php
    error_reporting(0); // 關閉錯誤訊息
    session_start();     // 啟動 session

    if (!$_SESSION["id"]) { // 若未登入
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    } else {
        // 連線到資料庫
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 建立 UPDATE SQL 指令
        $sql = "update bulletin set
                    title='{$_POST['title']}',
                    content='{$_POST['content']}',
                    time='{$_POST['time']}',
                    type={$_POST['type']}
                where bid='{$_POST['bid']}'";

        // 執行更新，判斷是否成功
        if (!mysqli_query($conn, $sql)) {
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        } else {
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
