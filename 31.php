<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>國立勤益科技大學資訊管理系</title>
    <!-- 設定背景圖片 -->
    <style type="text/css">
        body {
            background-image: url("https://upload.wikimedia.org/wikipedia/zh/2/2f/NCUT_LOGO.png");
            background-repeat: no-repeat;
            background-position: center top;
            background-size: 150px 150px;
            background-attachment: fixed;
        }

        table {
            width: 90%;
            margin: auto;
            border: 1px solid black;
            background-color: white;
        }

        th {
            background-color: black;
            color: white;
        }

        td {
            background-color: #DDDDDD;
            color: black;
        }

        .center {
            text-align: center;
        }

        a:link {
            color: blue;
            text-decoration: none;
        }

        a:visited {
            color: purple;
        }

        a:hover {
            color: red;
        }

        a:active {
            color: orange;
        }

        /* 下拉式選單樣式 */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <h1 class="center">國立勤益科技大學 資訊管理系</h1>

    <!-- 加入超連結與下拉式選單 -->
    <div class="center">
        <div class="dropdown">
            <button class="dropbtn">常用連結</button>
            <div class="dropdown-content">
                <a href="https://www.ncut.edu.tw">勤益首頁</a>
                <a href="https://portal.ncut.edu.tw">校園入口</a>
                <a href="https://moodle.ncut.edu.tw">Moodle 平台</a>
            </div>
        </div>
    </div>

    <br>

    <!-- 資訊表格 -->
    <table border="1">
        <tr>
            <th>系所</th>
            <th>學制</th>
            <th>學年度</th>
            <th>學期</th>
            <th>課號</th>
            <th>課程名稱</th>
            <th>授課教師</th>
        </tr>
        <tr>
            <td>資訊管理系</td>
            <td>四技</td>
            <td>113</td>
            <td>1</td>
            <td>Q31234</td>
            <td>網頁設計</td>
            <td>陳○○</td>
        </tr>
    </table>

    <br>

    <!-- 聯絡資訊 -->
    <address class="center">
        <strong>聯絡我們</strong><br>
        地址：411030 台中市太平區中山路二段57號<br>
        電話：04-23924505<br>
        網站：<a href="https://www.ncut.edu.tw">https://www.ncut.edu.tw</a>
    </address>
</body>
</html>
