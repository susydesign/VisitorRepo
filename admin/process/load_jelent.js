/* prof_klinkika.php hívja */

$(document).ready(function () {

    $("#o_db").on('click',function(){
        $("#showData_div").removeClass("hide");
        $("#showData_apolo").addClass("hide");
        $("#showData_int").removeClass("hide");
        $("#ok_card").css("display","none");
        $("#apolo_card").css("display","none");
        $("#o_db").addClass("aktiv");
        $("#a_db").removeClass("aktiv");
        load_jIntezmeny();
        load_okCard();
    })

    $("#a_db").on('click',function(){
        $("#showData_div").removeClass("hide");
        $("#showData_int").addClass("hide");
        $("#showData_apolo").removeClass("hide");
        $("#ok_card").css("display","none");
        $("#apolo_card").css("display","none");
        $("#a_db").addClass("aktiv");
        $("#o_db").removeClass("aktiv");
        load_jApolo();
        load_apooloCard()
    })

    function load_okCard() {
        $("#showData_int").on('click','.ezt', function(){
    
            $("#ok_card").css('display','grid');
    
            var currentRow=$(this).closest("tr");
    
            var akt_o_id = currentRow.find("td:eq(0)").text();
            var akt_o_nev = currentRow.find("td:eq(1)").text();
            var akt_o_irsz = currentRow.find("td:eq(2)").text();
            var akt_o_varos = currentRow.find("td:eq(3)").text();
            var akt_o_utca = currentRow.find("td:eq(4)").text();
            var akt_o_telefon = currentRow.find("td:eq(5)").text();
            var akt_o_email = currentRow.find("td:eq(6)").text();
            var akt_o_kapcs = currentRow.find("td:eq(7)").text();
            var akt_o_status = currentRow.find("td:eq(8)").text();
    
              
            $('#o_status').val(akt_o_status)
            $('#o_id').html(akt_o_id)
            $('#o_nev').val(akt_o_nev);
            $('#o_irsz').val(akt_o_irsz);
            $('#o_varos').val(akt_o_varos);
            $('#o_utca').val(akt_o_utca);
            $('#o_telefon').val(akt_o_telefon);
            $('#o_email').val(akt_o_email);
            $('#o_kapcs').val(akt_o_kapcs);
            if(akt_o_status==0){
                akt_o_status="Nem rögzített";
            }else if(akt_o_status==1){
                akt_o_status="Rögzített";
            }else{
                akt_o_status="Archivált"
            }
    
            $('#o_status').html(akt_o_status);
        });

    }

    function load_apooloCard() {
        $("#showData_apolo").on('click','.ezt', function(){
    
             $("#apolo_card").css('display','grid');
    
            var currentRow=$(this).closest("tr");
    
            var akt_jel_id = currentRow.find("td:eq(0)").text();
            var akt_a_nev = currentRow.find("td:eq(1)").text();
            var akt_a_fenykep = currentRow.find("td:eq(2)").text();
            var akt_a_szul = currentRow.find("td:eq(3)").text();
            var akt_a_irsz = currentRow.find("td:eq(4)").text();
            var akt_a_varos = currentRow.find("td:eq(5)").text();
            var akt_a_utca = currentRow.find("td:eq(6)").text();
            var akt_a_hsz = currentRow.find("td:eq(7)").text();
            var akt_a_telefon = currentRow.find("td:eq(8)").text();
            var akt_a_email = currentRow.find("td:eq(9)").text();
            var akt_a_v_megnev = currentRow.find("td:eq(10)").text();
            var akt_a_v_ido = currentRow.find("td:eq(11)").text();
            var akt_a_v_doksi = currentRow.find("td:eq(12)").text();
            var akt_a_oradij = currentRow.find("td:eq(13)").text();
            var akt_a_bemut = currentRow.find("td:eq(14)").text();
            var akt_a_minosites = currentRow.find("td:eq(15)").text();
            var akt_a_status = currentRow.find("td:eq(16)").text();

              
            $('#a_status').val(akt_a_status)
            $('#a_jel_id').html(akt_jel_id)
            $('#a_nev').val(akt_a_nev);
            $('#a_szul').val(akt_a_szul);
            $('#a_fenykep').val(akt_a_fenykep);
            $('#a_irsz').val(akt_a_irsz);
            $('#a_varos').val(akt_a_varos);
            $('#a_utca').val(akt_a_utca);
            $('#a_hsz').val(akt_a_hsz);
            $('#a_telefon').val(akt_a_telefon);
            $('#a_email').val(akt_a_email);
            $('#a_v_megnev').val(akt_a_v_megnev);
            $('#a_v_ido').val(akt_a_v_ido);
            $('#a_v_doksi').val(akt_a_v_doksi);
            $('#a_oradij').val(akt_a_oradij);
            $('#a_bemut').val(akt_a_bemut);
            $('#a_minosites').val(akt_a_minosites);
            if(akt_a_status==0){
                akt_a_status="Nem rögzített";
            }else if(akt_a_status==1){
                akt_a_status="Rögzített";
            }else{
                akt_a_status="Archivált"
            }
    
            $('#a_status').html(akt_a_status);
        });

    }

    
    function load_jIntezmeny() { 
        $.ajax({
            url: "../model/m_load_j_int.php",
            method: "POST",
            dataType: "json",
            cache: false,                       
            error: function(request, message, error){
                console.log('Ajax error: '+request.resposeText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {

                productListSuccess(products);

                if(products[0].error != '0'){
                    console.log("load_jelentkezok"+products.error);
                }else{
                    $('#o_db').html('Intézmény jelentkezők: '+products.length);                   
                }
            }
        });

        function productListSuccess(products) {
            // Iterate over the collection of data
            $.each(products, function (index, product) {
              // Add a row to the Product table
              productAddRow(product);
            });
          }
          
          function productAddRow(product) {
            // Check if <tbody> tag exists, add one if not
             if ($("#showData_int tbody").length == 0) {
              $("#showData_int").append("<tbody></tbody>");
             }
             // Append row to <table>
             $("#showData_int tbody").append(
               productBuildTableRow(product));
           }
           
           function productBuildTableRow(product) {
            var ret ="";
                ret =
                "<tr>" +
                "<td>" +
                    "<button type='button' " +
                        "class='ezt btn btn-default' " +
                        "data-id='" + product.jel_o_id + "'>" +
                        "<span class='glyphicon glyphicon-edit' />"
                    + product.jel_o_id+"</button>" +
                "</td>" +
                "<td>" + product.o_nev + "</td>" +
                "<td>" + product.o_irsz + "</td>" +
                "<td>" + product.o_varos + "</td>" +
                "<td>" + product.o_utca + "</td>" +
                "<td>" + product.o_telefon + "</td>" +
                "<td>" + product.o_email + "</td>" +
                "<td>" + product.o_kapcs + "</td>" +
                "<td>" + product.o_status + "</td>" +
              "</tr>";
            return ret;
          }
    }

    function load_jApolo() { 
        $.ajax({
            url: "../model/m_load_j_apolo.php",
            method: "POST",
            dataType: "json",
            cache: false,                       
            error: function(request, message, error){
                console.log('Ajax error: '+request.resposeText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {

                productListSuccess(products);

                if(products[0].error != '0'){
                    console.log("load_apolok"+products.error);
                }else{
                    $('#a_db').html('Ápoló jelentkezők: '+products.length);                   
                }
            }
        });

        function productListSuccess(products) {
            // Iterate over the collection of data
            $.each(products, function (index, product) {
              // Add a row to the Product table
              productAddRow(product);
            });
          }
          
          function productAddRow(product) {
            // Check if <tbody> tag exists, add one if not
             if ($("#showData_apolo tbody").length == 0) {
              $("#showData_apolo").append("<tbody></tbody>");
             }
             // Append row to <table>
             $("#showData_apolo tbody").append(
               productBuildTableRow(product));
           }
           
           function productBuildTableRow(product) {
            var ret = "";
                ret = 
                "<tr>" +
                "<td>" +
                    "<button type='button' " +
                        "class='ezt btn btn-default' " +
                        "data-id='" + product.jel_a_id + "'>" +
                        "<span class='glyphicon glyphicon-edit' />"
                    + product.jel_a_id+"</button>" +
                "</td>" +
                "<td>" + product.a_nev + "</td>" +
                "<td>" + product.a_fenykep + "</td>" +
                "<td>" + product.a_szul + "</td>" +
                "<td>" + product.a_irsz + "</td>" +
                "<td>" + product.a_varos + "</td>" +
                "<td>" + product.a_utca + "</td>" +
                "<td>" + product.a_hsz + "</td>" +
                "<td>" + product.a_telefon + "</td>" +
                "<td>" + product.a_email + "</td>" +
                "<td>" + product.a_v_megnev + "</td>" +
                "<td>" + product.a_v_ido + "</td>" +
                "<td>" + product.a_v_doksi + "</td>" +
                "<td>" + product.a_oradij + "</td>" +
                "<td>" + product.a_bemut + "</td>" +
                "<td>" + product.a_minosites + "</td>" +
                "<td>" + product.a_status + "</td>" +
              "</tr>";
            return ret;
          }
    }


    $("#btn_rog").on('click',function(){

        var o_id = $("#o_id").html();
        var i_nev = $("#o_nev").val();
        var i_irsz = $("#o_irsz").val();
        var i_varos = $("#o_varos").val();
        var i_utca = $("#o_utca").val();
        var i_telefon = $("#o_telefon").val();
        var i_email = $("#o_email").val();
        var i_kapcs = $("#o_kapcs").val();
        var i_status = 1;


        $.ajax({
            url: "../model/m_beir_int.php",
            method: "POST",
            dataType: "json",
            cache: false,
            data:{
                i_nev:i_nev, 
                i_irsz:i_irsz,
                i_varos:i_varos,
                i_utca:i_utca,
                i_telefon:i_telefon,
                i_email:i_email,
                i_kapcs:i_kapcs,
                i_status:i_status
            },
            error: function(request, message, error){
                console.log('Ajax error: '+request.resposeText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {
                $("#ok_card").css('display','none');
                
                jelent_mod('int',o_id,1)

                location.reload();

 
                if(products[0].error != '0'){
                    console.log("load_jelentkezok"+products.error);
                }else{
                    $('#o_db').html('Intézmény jelentkezők: '+products.length);                   
                }
            }
        });


    });

    $("#btn_del").on('click',function(){
        alert("Végrehajtjuk a logikai törlést");
    })

    $("#btn_a_rog").on('click',function(){

        var jel_id = $("#a_jel_id").html();
        var a_nev = $("#a_nev").val();
        var a_fenykep = $("#a_fenykep").val();
        var a_szul = $("#a_szul").val();
        var a_irsz = $("#a_irsz").val();
        var a_varos = $("#a_varos").val();
        var a_utca = $("#a_utca").val();
        var a_hsz = $("#a_hsz").val();
        var a_telefon = $("#a_telefon").val();
        var a_email = $("#a_email").val();
        var a_v_megnev = $("#a_v_megnev").val();
        var a_v_ido = $("#a_v_ido").val();
        var a_v_doksi = $("#a_v_doksi").val();
        var a_bemut = $("#a_bemut").val();
        var a_oradij = $("#a_oradij").val();
        var a_minosites = $("#a_minosites").val();
        var a_status = 1;


        $.ajax({
            url: "../model/m_beir_apolo.php",
            method: "POST",
            dataType: "json",
            cache: false,
            data:{
                jel_id:jel_id, 
                a_nev:a_nev,
                a_fenykep:a_fenykep,
                a_szul:a_szul,
                a_irsz:a_irsz,
                a_varos:a_varos,
                a_utca:a_utca,
                a_hsz:a_hsz,
                a_telefon:a_telefon,
                a_email:a_email,
                a_v_megnev:a_v_megnev,
                a_v_ido:a_v_ido,
                a_v_doksi:a_v_doksi,
                a_bemut:a_bemut,
                a_oradij,a_oradij,
                a_minosites:a_minosites,
                a_status:a_status
            },
            error: function(request, message, error){
                console.log('Ajax error: '+request.resposeText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {
                $("#apolo_card").css('display','none');
                
                jelent_mod('apolo',jel_id,1)

                location.reload();

 
                if(products[0].error != '0'){
                    console.log("load_jelentkezok"+products.error);
                }else{
                    $('#a_db').html('Ápolók jelentkezők: '+products.length);                   
                }
            }
        });
    });

    function jelent_mod(sql, id, kod){
        var str_url = "";
        if(sql == "apolo"){
            str_url = "../model/mod_jelen_apolo.php"
        }else {
            str_url = "../model/mod_jelen_intezmeny.php"
        }

        $.ajax({
            url: str_url,
            method: "POST",
            dataType: "json",
            cache: false,
            data:{
                jel_id:id,
                status:kod
            },
            error: function(request, message, error){
                console.log('Ajax error: '+request.resposeText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {

  
                if(products[0].error != '0'){
                    console.log("load_jelentkezok"+products.error);
                }else{
                    if(sql == 'apolo'){
                        $('#a_db').html('Apolok jelentkezők: '+products.length);                   
                    }else{
                        $('#o_db').html('Intézmény jelentkezők: '+products.length);                   
                    }
                }
            }
        });


    }
})