
$.getWinHeight = function (afterGetHeight) {
    var getFunc = function () {
        var h = window.innerHeight;
        if (h <= 300) {
            window.setTimeout(getFunc, 50);
        }
        else {
            afterGetHeight(h);
        }
    };

    window.setTimeout(getFunc, 50);

};

var win_width=$(window).width();
            var hb_height = parseInt(770.00 * win_width / 640.00);
            $.getWinHeight(function (wh) {
                var minHb = parseInt(wh - win_width * 0.5);
                hb_height = parseInt(Math.min(minHb, hb_height));
                $(".hb1").css("height", hb_height + "%");
            });
            

            var changeToLogin = function () {
                $(".hb1").animate({
                        "height": header_height+"%"
                }, 200, function () {
                    $(".hb1").animate({
                        "opacity":"0"
                    },100);
                        $("li.login").removeClass("fo");
                        $.cover.close();
                    });
            };

            var changeToReg = function () {
                $(".hb1").animate({
                    "height": header_height + "%"
                }, 200, function () {
                    $(".hb1").animate({
                        "opacity": "0"
                    }, 100);
                    $("li.reg").removeClass("fo");
                    $.cover.close();
                });
            };


            var changeToFirst = function () {
                $(".hb1").css("opacity","1");
                $(".hb1").animate({
                    "height": hb_height+"%"
                }, 200, function () {
                   $.cover.close();
                });
            };