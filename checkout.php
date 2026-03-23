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
                    <!-- 引入結帳模組 -->
                    <?php //require_once("checkout.php"); ?>
                    <h3>電商藥粧：會員結帳作業</h3>
                    <div class="row">
                        <div class="card col">
                            <div class="card-header" style="color: #007bff;"><i
                                    class="fas fa-truck fa-flip-horizontal me-1"></i>配送資訊</div>
                            <div class="card-body">
                                <h4 class="card-title">收件人資訊：</h4>
                                <h5 class="card-title">姓名：李小明</h5>
                                <p class="card-text">電話：0912345678</p>
                                <p class="card-text">郵遞區號：407台中市西屯區</p>
                                <p class="card-text">地址：中正路1號</p>
                                <a href="#" class="btn btn-outline-primary">選擇其他收件人</a>
                            </div>
                        </div>
                        <div class="card col ms-3">
                            <div class="card-header" style="color: #000;"><i class="fas fa-credit-card me-1"></i>付款資訊
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">收件人資訊：</h4>
                                <h5 class="card-title">姓名：李小明</h5>
                                <p class="card-text">電話：0912345678</p>
                                <p class="card-text">郵遞區號：407台中市西屯區</p>
                                <p class="card-text">地址：中正路1號</p>
                                <a href="#" class="btn btn-outline-primary">選擇其他收件人</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive-md">
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr class="text-bg-primary">
                                    <th width="10%">產品編號</th>
                                    <th width="10%">圖片</th>
                                    <th width="30%">名稱</th>
                                    <th width="15%">價格</th>
                                    <th width="15%">數量</th>
                                    <th width="20%">小計</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="product_img/1411-OPC軟糖.png" alt="OPC-3® 雙層Q心嚼粒" title="OPC-3® 雙層Q心嚼粒" class="img-fluid"></td>
                                    <td>OPC-3® 雙層Q心嚼粒</td>
                                    <td><h4 class="color_e600a0 pt-1">NT$ 1300</h4></td>
                                    <td>3</td>
                                    <td><h4 class="color_e600a0 pt-1">NT$ 3,900</h4></td>
                                </tr>

                                
                                <tr>
                                    <td>2</td>
                                    <td><img src="product_img/421-甘菊洗髮精.png" class="img-fluid rounded-start" alt="柔雅™甘菊洗髮精" title="柔雅™甘菊洗髮精"></td>
                                    <td>柔雅™甘菊洗髮精</td>
                                    <td><h4 class="color_e600a0 pt-1">NT$ 690</h4></td>
                                    <td>10</td>
                                    <td><h4 class="color_e600a0 pt-1">NT$ 6,900</h4></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7" class="text-end"><strong>累計：NT$ 10,800</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="text-end"><strong>運費：NT$ 160</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="text-end text-danger"><strong>總計：NT$ 10,960</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="7"><button type="button" id="btn04" name="btn04" class="btn btn-danger"><i class="fas fa-cart-arrow-down pr-2"></i>確認結帳</button></td>
                                </tr>
                                </tfoot>
                        </table>
                    </div>

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

</html>