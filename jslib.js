// pdf04-p50
//跳出確認訊息對話框
function btn_confirmLink(message, url) {
    if (message == "" || url == "") {
        return false;
    }
    if (confirm(message)) {
        window.location = url;
    }
    return false;
}

//更改數量寫入資料庫
$("#cartForm1 input").change(function () {
    var qty = $(this).val();
    const cartid = $(this).attr("cartid");
    if (qty <= 0 || qty >= 50) {
        alert("產品數量不得為0或大於50，請再修改數量！");
        return false;
    }


});

// pdf03-p85~86
//將產品p_id加入購物車
function addcart(p_id) {
    var qty = $("#qty").val();
    if (qty <= 0) {
        alert("產品數量不得為0或為負數，請再修改數量！");
        return (false);
    }
    if (qty == undefined) {
        qty = 1;
    } else if (qty >= 50) {
        alert("由於採購限制，產品數量不得超過50，請再修改數量！");
        return (false);
    }
    // 利用jquery $.ajax函數呼叫後台的addcart.php

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

//將變更的數量寫入後台資料庫

$.ajax({
    url: 'change_qty.php',
    type: 'post',
    dataType: 'json',
    data: { cartid: cartid, qty: qty },
    success: function (data) {
        if (data.c == true) {
            //alert(data.m);
            window.location.reload();
        } else {
            alert(data.m);
        }
    },
    error: function (data) {
        alert("系統目前無法連接到後台資料庫。");
    }
});
