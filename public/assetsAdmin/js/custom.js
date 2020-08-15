/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

/**  */
$(window).ready(function(){
    $("#marque_sub").val($("#marque").val());

    var marque = $("#data_cm").attr("marque");
    var categorie =$("#data_cm").attr("categorie");

    if($("#marque").val() != marque){
       $("#marque").val(marque);
    }
    if($("#categorie").val() != categorie){
       $("#categorie").val(categorie);
    }

    /* to update images */

});
$("#marque").change(function(){
    if($("#marque").val() == "..."){
    $("#marque_sub").prop("hidden",false);
    }else{
        $("#marque_sub").prop("hidden",true);
    }
   $("#marque_sub").val($("#marque").val());
});

/* */

/* search button */

$(document).ready(function(){
    $(".search-element button").click(function(){
     var wds_t = $(".mxd-1").toArray();
     var l_wd = wds_t.length ;
        var srh_txt = $(".search-element input").val().toLowerCase();
        var wds = ".mxd-2 .mxd-3";
        if(srh_txt != ""){

        /* $(".tmx").addClass("display-wd");
        $(".pmx").addClass("pmx-p"); */
        }
        $(wds).each(function(){
         var txt = $(this).text().toLowerCase();
         if(txt.includes(srh_txt)){
             $(this).parent().closest(".mxd-1").removeClass("display-wd");
         }else{
             $(this).parent().closest(".mxd-1").addClass("display-wd");
             l_wd = l_wd - 1;
         }

        });
        if(l_wd == 0){
          var wds = ".mxd-1";
          swal("Recherche introuvable!", "verifiez votre recherche et réeassayer à nouveau!", "error");
          $(wds).each(function(){
            $(this).removeClass("display-wd");

       });


        }else{
          $(".btn-all-mx").removeClass("display-wd");
        }

    });
    $(".btn-all-mx").click(function(){
     $(this).addClass("display-wd");
        $(".pmx").removeClass("pmx-p");
        var wds = ".mxd-1";

        $(wds).each(function(){
             $(this).removeClass("display-wd");
        });

     });

 });

 /*  */
 $(document).ready(function(){
  var val =  $(".mc").children("option:selected").val();
  $("#marque_sub_exc").val(val);

  /*before event change */
  var cat_ids = $(".op").toArray();
      var l_lnk = cat_ids.length ;

      var id =  $(".c").children("option:selected").attr('data');

      $(".op").each(function(){
        if( $(this).attr("data") == id ){
          $(this).removeClass("display-wd");
          $(this).prop('disabled',false);
        }else{
          $(this).addClass("display-wd");
          $(this).prop('disabled',true);
        }
        if( $(this).attr("value") == val ){
          $(this).removeClass("display-wd");
          $(this).prop('disabled',false);
          $(this).css("background","pink");
        }
      $(".op[data="+id+"]").first().prop('selected',true);
      $(".mc").val($(".op[data="+id+"]").first().val());
      $(".op").each(function(){
        if($(this).css("background-color") == "rgb(255, 192, 203)"){
          $(this).prop('selected',true);
          $(".mc").val($(this).val());
        }
      });
      
      $("#marque_sub").val($("#marque").val());
/*end before event change */
  $(".c").change(function(){
      var cat_ids = $(".op").toArray();
      var l_lnk = cat_ids.length ;

      var c1 = $(".c1").attr('data');
      var c2 = $(".c2").attr('data');

      var id =  $(this).children("option:selected").attr('data');

      $(".op").each(function(){
        if( $(this).attr("data") == id ){
          $(this).removeClass("display-wd");
          $(this).prop('disabled',false);
        }else{
          $(this).addClass("display-wd");
          $(this).prop('disabled',true);
  
        }

    });
    $(".op[data="+id+"]").first().prop('selected',true);
    $(".mc").val($(".op[data="+id+"]").first().val());
    $(".op").each(function(){
      if($(this).css("background-color") == "rgb(255, 192, 203)"){
        $(this).prop('selected',true);
        $(".mc").val($(this).val());
      }
    });
    $(".op").each(function(){
      if( $(this).attr("value") == val ){
        $(this).removeClass("display-wd");
        $(this).prop('disabled',false);
        $(this).css("background","pink");
      }

    });
    $("#marque_sub").val($("#marque").val());
  });


  

  });
});
