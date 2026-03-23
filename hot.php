<?php
//建立熱銷商品查詢 從資料庫裡的這三個檔案中挑選配對 然後依產品圖片排序
$SQLstring = "SELECT * FROM hot,product,product_img WHERE hot.p_id=product_img.p_id AND hot.p_id=product.p_id AND product_img.sort=1 ORDER BY h_sort";
$hot = $link->query($SQLstring);
?>
<div class="card text-center mt-3" style="border:none;">
    <div class="card-body">
        <h3 class="card-title">站長推薦，熱銷商品</h3>
    </div>
    <?php while ($data = $hot->fetch()) { ?>
    <a href="goods.php?p_id=<?php echo $data['p_id']; ?>">
    <img src="product_img/<?php echo $data['img_file']; ?>" class="card-img-top"
            alt="HOT<?php echo $data['h_sort']; ?>" title="<?php echo $data['p_name']; ?>"></a>
    <?php } ?>
    <!-- <img src="product_img/-SPF50-50ml-196690.webp" class="card-img-top" alt="...">
    <img src="product_img/-Acnes-BB-30g-533727.webp" class="card-img-top" alt="..."> -->
</div>