$(document).ready (function ()
    {
        var pl = $(".js_heji:last");
        var reg = /(.*[\￥]\s*)([\+\d\.]+)(\s*元)/g;
        $ (".sy_minus").live('click',function ()
        {
            var me = $ (this), txt = me.next (":text"), pc = me.closest(".js_num");
            var val = parseFloat (txt.val ());
            val = val < 1 ? 1 : val;
            txt.val (val - 1);
            var price = parseFloat (pc.prev(".js_danjia").text().replace(reg,'$2')) * txt.val ();
			pc.next(".js_bb").text (pc.next(".js_bb").text().replace(reg, "$1" + price + "$3"));
            var sum = 0;
            $(".js_num").next(".js_bb").each(function (i, dom)
            {
                sum += parseFloat ($(this).text().replace(reg, "$2"));
            });
            pl.text(pl.text().replace(reg, "$1" + sum + "$3"));
        });
         
        $(".sy_plus").live('click',function ()
        {	
            var me = $ (this), txt = me.prev (":text"), pc = me.closest(".js_num");
            var val = parseFloat (txt.val ());
            txt.val (val + 1);
            var price = parseFloat (pc.prev(".js_danjia").text().replace(reg,'$2')) * txt.val ();
			pc.next(".js_bb").text (pc.next(".js_bb").text().replace(reg, "$1" + price + "$3"));
            var sum = 0;
            $(".js_num").next(".js_bb").each(function (i, dom)
            {
                sum += parseFloat ($(this).text().replace(reg, "$2"));
            });
            pl.text(pl.text().replace(reg, "$1" + sum + "$3"));
        });
})[0].onselectstart = new Function ("return false");
