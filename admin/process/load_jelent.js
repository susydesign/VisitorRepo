/* prof_klinkika.php hívja */

$(document).ready(function () {

    $("#showData").on('click','.ezt', function(){

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

    load_otthon();
    
    function load_otthon()
    { 
        $.ajax({
            url: "../model/m_load_jelent.php",
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
             if ($("#showData tbody").length == 0) {
              $("#showData").append("<tbody></tbody>");
             }
             // Append row to <table>
             $("#showData tbody").append(
               productBuildTableRow(product));
           }
           
           function productBuildTableRow(product) {
            var ret =
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
                
                jelent_mod(o_id,1)

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

    function jelent_mod(id, kod){

        $.ajax({
            url: "../model/m_jelo_mod.php",
            method: "POST",
            dataType: "json",
            cache: false,
            data:{
                jel_o_id:id,
                o_status:kod
            },
            error: function(request, message, error){
                console.log('Ajax error: '+request.resposeText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {

  
                if(products[0].error != '0'){
                    console.log("load_jelentkezok"+products.error);
                }else{
                    $('#o_db').html('Intézmény jelentkezők: '+products.length);                   
                }
            }
        });


    }
})