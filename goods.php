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
    <link rel="stylesheet" href="fancybox-2.1.7/source/jquery.fancybox.css">
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
                    <!-- 引入方式連接模組(麵包屑) -->
                    <?php require_once("breadcrumb.php"); ?>
                    <!-- 產品詳細資訊模組 -->
                    <?php require_once("goods_content.php"); ?>                    
                    <?php //require_once("drop-box.php"); ?>
                </div>
            </div>
        </div>
    </section>
    <hr>
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
<script type="text/javascript" src="fancybox-2.1.7/source/jquery.fancybox.js"></script>
<script type="text/javascript">
    $(function () {
        //定義在滑鼠滑過圖片檔名填入主圖src中
        $(".card .row.mt-2 .col-md-4 a").mouseover(function () {
            var imgsrc = $(this).children("img").attr("src");
            $("#showGoods").attr({ "src": imgsrc });
        });
        //將子圖片放到lightbox中展示
        $(".fancybox").fancybox();
    });
</script>
<!-- <script type="text/javascript">
    //將產品p_id加入購物車
    function addcart(p_id) {
        var qty = $("#qty").val();
        if (qty <= 0) {
            alert("產品數量不得為0或為負數，請再修改數量！");
            return false;
        }
        if (qty == undefined) {
            qty = 1;
        } else if (qty >= 50) {
            alert("由於採購限制，產品數量不得超過50，請再修改數量！");
            return false;
        }
        //利用jquery $.ajax()方法將產品id與數量傳送到addcart.php中處理
        $.ajax({
            url: 'addcart.php',
            type: 'get',
            dataType: 'json',
            data: { p_id: p_id, qty: qty },
            success: function (data) {
                if (data.c == true) {
                    alert(data.m);
                    window.location.reload();
                } else {
                    alert(data.m);
                }
            },
            error: function (data) {
                alert("系統目前無法連接到後台資料庫。");
            }
        });
    }
</script> -->

</html>