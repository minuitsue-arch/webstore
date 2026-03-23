$(function () {
    $("body").append("<img id='goTopButton' style='display: none; z-index: 5; cursor:pointer;' title='回到頂端' />");
    var img = "images/bntop01.png",
        locate = 0.8,
        right = 200,
        opacity = 0.3,
        speed = 4000,
        $button = $("#goTopButton");
    $button.attr("src", img);

    function goTopMove() {
        var scrollH = $(document).scrollTop(),
            winH = $(window).height(),
            css = { "top": winH * locate + "px", "position": "fixed", "right": right, "opacity": opacity };

        console.log(scrollH);
        if (scrollH > 20) {
            $button.css(css);
            $button.fadeIn("slow");
        } else {
            $button.fadeOut("slow");
        }
    };
    $(window).on({
        scroll: function () { goTopMove(); },
        resize: function () { goTopMove(); }
    });

    $button.on({
        mouseover: function () { $button.css("opacity", 1); },
        mouseout: function () { $button.css("opacity", opacity); },
        click: function () {
            var css = {
                "transition": "transform 3s cubic-bezier(0.68, -0.55, 0.265, 1.55)",
                "transform": "translateX(-1000px) scale(2)"
            };
            $button.css(css);
            $("html, body").animate({ scrollTop: 0 }, speed);
            setTimeout(function () {
                $button.css("transition", "none");
                $button.css("transform", "none");
            }, 3000);
        }
    });
});