<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/logo.svg" class="img-fluid w-25"
                alt="楓奈爾嚴選 shop.com/fonelle" title="楓奈爾嚴選 shop.com/fonelle－保健｜窈窕｜美容｜生活"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        //引入PHP函數庫讀取後台購物車內產品數量
        $SQLstring = "SELECT * FROM cart WHERE orderid is NULL AND ip = '" . $_SERVER['REMOTE_ADDR'] . "'";
        $cart_rs = $link->query($SQLstring);
        ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- 使用PHP函數方式產生類別功能 -->
                <?php multiList01(); ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">會員註冊</a>
                </li>
                <?php if (isset($_SESSION['login'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);"
                            onclick="btn_confirmLink('是否確定登出？','logout.php')">會員登出</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">會員登入</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">會員中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">查訂單</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">購物車<span
                            class="badge text-bg-info"><?php echo ($cart_rs) ? $cart_rs->rowCount() : ''; ?></span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">購物指南</a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="#"><i class="fas fa-lg fa-fw"></i></a></li> -->
                        <li><a class="dropdown-item" href="https://tw.shop.com/vift" target="_blank">如何領取現金回饋</a></li>
                        <li><a class="dropdown-item" href="https://tw.shop.com/info/our-brands" target="_blank">獨家品牌</a>
                        </li>
                        <li><a class="dropdown-item" href="https://tw.shop.com/assessment/health?hsh=4"
                                target="_blank">健康測驗只要60秒</a></li>
                        <li><a class="dropdown-item" href="https://tw.shop.com/hot-deals?tkr=200330172122&hcdl1=2" target="_blank">最新促銷優惠</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <?php
            if (isset($_SESSION['login'])) { ?>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="uploads/<?php echo ($_SESSION['imgname'] != '') ? $_SESSION['imgname'] : 'avatar.svg'; ?>"
                                width="40" height="40" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="orderlist.php">Order List</a>
                            <a class="dropdown-item" href="profile.php">Edit Profile</a>
                            <a class="dropdown-item" href="#" onclick="btn_confirmLink('請確定是否要登出','logout.php');">Log
                                Out</a>
                        </div>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>
<?php
function multiList01()
{
    global $link;
    $SQLstring = "SELECT * FROM pyclass WHERE level=1 ORDER BY sort";
    $pyclass01 = $link->query($SQLstring);
    ?>
    <!-- 第一層 -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" aria-expanded="false">
            產品資訊
        </a>
        <!-- 第二層 -->
        <ul class="dropdown-menu">
            <?php while ($pyclass01_Rows = $pyclass01->fetch()) {
                ?>
                <li class="nav-item dropend"><a href="#" class="dropdown-item dropdown-toggle">
                        <i class="fas 
<?php echo $pyclass01_Rows['fonticon']; ?> fa-lg fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?></a>
                    <!-- 第三層 -->
                    <?php
                    // 列出產品類別對應的第二層資料
                    $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=2 AND uplink=%d ORDER BY sort", $pyclass01_Rows['classid']);
                    $pyclass02 = $link->query($SQLstring);
                    ?>
                    <ul class="dropdown-menu">
                        <?php while ($pyclass02_Rows = $pyclass02->fetch()) { ?>
                            <li><a class="dropdown-item" href="drugstore.php?classid=<?php echo $pyclass02_Rows['classid']; ?>"><i
                                        class="fas <?php echo $pyclass02_Rows['fonticon']; ?> fa-fw"></i><?php echo $pyclass02_Rows['cname']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </li>
<?php } ?>