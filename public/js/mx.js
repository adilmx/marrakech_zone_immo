/* pagination */
$(document).ready(function(){
    $("a[data-id='page-a']").click(function(){
        var links = $("li[data-id='page-li']").toArray();
        var l_lnk = links.length ;

        var wds = $("[class*=GridLex-grid]>[class*=_mx-widget]").toArray();
        var l_wd = wds.length ;

        var id =  event.target.getAttribute("id-pg");

        $("li[data-id='page-li'][id-pg='"+id+"']").addClass("active");
        $("[class*=GridLex-grid]>[class*=_mx-widget][data-widget='"+id+"']").removeClass("display-wd");

      wds.forEach(element => {
        if( element.getAttribute("data-widget") != id ){
            element.classList.add("display-wd");
        }

      });

      links.forEach(element => {
        if( element.getAttribute("id-pg") != id ){
            element.classList.remove("active");
        }

      });

    });


    $("a[aria-label='next-pg']").click(function(){
        var links = $("li[data-id='page-li']").toArray();
        var l_lnk = links.length ;

        var wds = $("[class*=GridLex-grid]>[class*=_mx-widget]").toArray();
        var l_wd = wds.length ;

        var id_active = $("li[data-id='page-li'][class*=active]").attr("id-pg");
        var act = parseInt(id_active) + 1 ;

        if(parseInt(id_active) == l_lnk){
            $("li[data-id='page-li'][class*=active]").removeClass("active");
            $("li[data-id='page-li'][id-pg='"+1+"']").addClass("active");
            $("[class*=GridLex-grid]>[class*=_mx-widget][data-widget='"+1+"']").removeClass("display-wd");

            wds.forEach(element => {
                if( element.getAttribute("data-widget") != 1 ){
                    element.classList.add("display-wd");
                }

              });
        }else{
            $("li[data-id='page-li'][class*=active]").removeClass("active");
            $("li[data-id='page-li'][id-pg='"+act+"']").addClass("active");
            $("[class*=GridLex-grid]>[class*=_mx-widget][data-widget='"+act+"']").removeClass("display-wd");

            wds.forEach(element => {
                if( element.getAttribute("data-widget") != act ){
                    element.classList.add("display-wd");
                }

              });
        }
    });

    $("a[aria-label='prev-pg']").click(function(){
        var links = $("li[data-id='page-li']").toArray();
        var l_lnk = links.length ;

        var wds = $("[class*=GridLex-grid]>[class*=_mx-widget]").toArray();
        var l_wd = wds.length ;

        var id_active = $("li[data-id='page-li'][class*=active]").attr("id-pg");
        var act = parseInt(id_active) - 1 ;

        if(parseInt(id_active) == 1){
            $("li[data-id='page-li'][class*=active]").removeClass("active");
            $("li[data-id='page-li'][id-pg='"+l_lnk+"']").addClass("active");
            $("[class*=GridLex-grid]>[class*=_mx-widget][data-widget='"+l_lnk+"']").removeClass("display-wd");

            wds.forEach(element => {
                if( element.getAttribute("data-widget") != l_lnk ){
                    element.classList.add("display-wd");
                }

              });
        }else{
            $("li[data-id='page-li'][class*=active]").removeClass("active");
            $("li[data-id='page-li'][id-pg='"+act+"']").addClass("active");
            $("[class*=GridLex-grid]>[class*=_mx-widget][data-widget='"+act+"']").removeClass("display-wd");

            wds.forEach(element => {
                if( element.getAttribute("data-widget") != act ){
                    element.classList.add("display-wd");
                }

              });
        }
    });

    });


/* search button */

$(document).ready(function(){
   $(".hero-mx-srch .form-group .btn").click(function(){
    var wds_t = $("[class*=GridLex-grid]>[class*=_mx-widget]").toArray();
    var l_wd = wds_t.length ;
       var srh_txt = $(".hero-mx-srch .form-group input").val().toLowerCase();
       var wds = ".mx-trip-guide-content h3";
       if(srh_txt != ""){
       $(".hero-mx-srch .form .btn-all-mx").removeClass("display-wd");
       $(".tmx").addClass("display-wd");
       $(".pmx").addClass("pmx-p");
       }
       $(wds).each(function(){
        var txt = $(this).text().toLowerCase();
        if(txt.includes(srh_txt)){
            $(this).parent().closest(".GridLex-col-3_mdd-4_sm-6_xs-6_xss-12_mx-widget").removeClass("display-wd");
        }else{
            $(this).parent().closest(".GridLex-col-3_mdd-4_sm-6_xs-6_xss-12_mx-widget").addClass("display-wd");
            l_wd = l_wd - 1;
        }

       });
       if(l_wd == 0){
        $(".smx").removeClass("display-wd");
       }

   });
   $(".hero-mx-srch .form .btn-all-mx").click(function(){
    $(this).addClass("display-wd");
    $(".smx").addClass("display-wd");
    $(".tmx").removeClass("display-wd");
       $(".pmx").removeClass("pmx-p");
       var wds = ".GridLex-col-3_mdd-4_sm-6_xs-6_xss-12_mx-widget";

       $(wds).each(function(){
        if( $(this).attr("data-widget") != 1 ){
            $(this).addClass("display-wd");
        }else{
            $(this).removeClass("display-wd");
        }
       });

    });

});

/* reservation date */
$("#date_debut_reservation").focusout(function(){
    if($("#date_debut_reservation").val() != ""){
        start = new Date($("#date_debut_reservation").val());
        dte(start,"date_fin_reservation");
        dte_val(start ,"#date_fin_reservation");
        $("#date_fin_reservation").prop('disabled',false) ;
    }

});

$(document).ready(function(){
    var date = new Date();
    dte(date,"date_debut_reservation");
    $("#date_fin_reservation").prop('disabled',true) ;
});

function dte(date , date_mxid){
    var d = date.getDate();
    var m =date.getMonth() + 1 ;
    var y = date.getFullYear() ;
    if(m < 10 && d < 10){
        document.getElementById(date_mxid).min = y+"-0"+m+"-0"+d ;
    }
    if(m >= 10 && d >= 10){
        document.getElementById(date_mxid).min = y+"-"+m+"-"+d ;
    }
    if(d < 10){
        document.getElementById(date_mxid).min = y+"-"+m+"-0"+d ;
    }
    if(m < 10){
        document.getElementById(date_mxid).min = y+"-0"+m+"-"+d ;
    }
}

function dte_val(date , date_mxid){
    var d = date.getDate();
    var m =date.getMonth() + 1 ;
    var y = date.getFullYear() ;
    if(m < 10 && d < 10){
        $(date_mxid).val(y+"-0"+m+"-0"+d);
    }
    if(m >= 10 && d >= 10){
        $(date_mxid).val(y+"-"+m+"-"+d);
    }
    if(d < 10){
        $(date_mxid).val(y+"-"+m+"-0"+d);
    }
    if(m < 10){
        $(date_mxid).val(y+"-0"+m+"-"+d);
    }
}

/* price from date */
$(document).ready(function(){
    $("#date_fin_reservation").focusout(function(){
    if($("#date_debut_reservation").val() != "" && $("#date_fin_reservation").val() != ""){
        start = new Date($("#date_debut_reservation").val());
        end = new Date($("#date_fin_reservation").val());

        var pmin = $(".mx-price").attr('pmin') ;
        var pmax = $(".mx-price").attr('pmax') ;

        days = parseFloat(diffDays(end,start)) + 1;

        if(days < 7){
            price = parseFloat(pmin) * parseFloat(days) ;
        }else{
            price = parseFloat(pmin) * parseFloat(days) ;
        }
        $(".mx-price").text(price+"$ / "+days+"jours");/*
        alert("days :"+days+"pmin :"+pmin+"pmax :"+pmax+"price :"+price); */
    }


});
});

function diffDays(d1,d2){
   var ms = d1.getTime() - d2.getTime();
   var days = ms / (1000 * 3600 * 24);

   return Math.round(Math.abs(days));
}
