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

