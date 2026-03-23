<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 跨網頁變數存取 session 若未啟動則啟動 -->
<?php require_once('Connections/conn_db.php'); ?>
<!-- 這是將資料庫連線程式載入 載入一次once -->
<?php require_once("php_lib.php"); ?>
<!doctype html>
<html lang="zh-hant-tw">

<head>
    <!-- 引入網頁標頭 -->
    <?php require_once("head.php"); ?>
    <style type="text/css">
        /* 輸入有錯誤時，顯示紅框 */
        table input:invalid {
            border: 3px solid red;
        }
    </style>
</head>
<body>
    <section id="header">
        <!-- 引入導覽列 -->
        <?php require_once("navbar.php"); ?>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!-- 引入sidebar分類導覽 -->
                    <?php require_once("sidebar.php"); ?>
                    <!-- 引入熱銷商品 -->
                    <?php require_once("hot.php"); ?>
                </div>
                <div class="col-md-10">
                    <!-- 引入購物車內容 -->
                    <?php require_once("cart_content.php"); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="scontent">
        <!-- 引入服務說明 -->
        <?php require_once("scontent.php"); ?>
    </section>
    <section id="footer">
        <!-- 引入聯絡資訊 -->
        <?php require_once("footer.php"); ?>
    </section>
</body>
<!-- 引入JS檔 -->
<?php require_once("jsfile.php"); ?>
</html>