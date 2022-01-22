$(document).ready(function () {
    $("#showData").on('click','.ezt', function(){

        $("#ok_card").css('display','grid');

        var currentRow=$(this).closest("tr");

        var akt_int_id = currentRow.find("td:eq(0)").text();
        var akt_i_nev = currentRow.find("td:eq(1)").text();
        var akt_i_irsz = currentRow.find("td:eq(2)").text();
        var akt_i_varos = currentRow.find("td:eq(3)").text();
        var akt_i_utca = currentRow.find("td:eq(4)").text();
        var akt_i_hsz = currentRow.find("td:eq(5)").text();
        var akt_i_telefon = currentRow.find("td:eq(6)").text();
        var akt_i_email = currentRow.find("td:eq(7)").text();
        var akt_i_kapcs = currentRow.find("td:eq(8)").text();
        var akt_i_rolunk = currentRow.find("td:eq(9)").text();

          
        $('#int_id').html(akt_int_id);
        $('#i_varos').val(akt_i_varos);
        $('#i_irsz').val(akt_i_irsz);
        $('#i_utca').val(akt_i_utca);
        $('#i_hsz').val(akt_i_hsz);
        $('#i_nev').val(akt_i_nev);
        $('#i_telefon').val(akt_i_telefon);
        $('#i_email').val(akt_i_email);
        $('#i_kapcs').val(akt_i_kapcs);
        $('#i_rolunk').val(akt_i_rolunk);
    });

    load_intezmenyek();

    function load_intezmenyek()
    {
        $.ajax({
            url: "../model/load_intezmenyek.php",
            method: "POST",
            dataType: "json",
            cache: false,                       
            error: function(request, message, error){
                console.log('Ajax error: '+request.responseText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {
                if(products[0].error != '0'){
                    console.log("load_intezmenyek"+products.error);
                }else{
                    productListSuccess(products);
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
                            "data-id='" + product.int_id + "'>" +
                            "<span class='glyphicon glyphicon-edit' />"
                        + product.int_id+"</button>" +
                    "</td>" +
                    "<td>" + product.i_nev + "</td>" +
                    "<td>" + product.i_irsz + "</td>" +
                    "<td>" + product.i_varos + "</td>" +
                    "<td>" + product.i_utca + "</td>" +
                    "<td>" + product.i_hsz + "</td>" +
                    "<td>" + product.i_telefon + "</td>" +
                    "<td>" + product.i_email + "</td>" + 
                    "<td>" + product.i_kapcs + "</td>" +
                    "<td><div id='td_rolunk' class='max-text'>" + product.i_rolunk + "</div></td>" +
                "</tr>";
            return ret;
          }
    }

    $("#gomb_c").click(function(){
        if($("#int_id").html() != ''){
            location.reload();
        }else{
            bekuld_c()
        }

        function bekuld_c(){

            var i_nev = $("#i_nev").val();
            var i_irsz = $("#i_irsz").val();
            var i_varos = $("#i_varos").val();
            var i_utca = $("#i_utca").val();
            var i_hsz = $("#i_hsz").val();
            var i_telefon = $("#i_telefon").val();
            var i_email = $("#i_email").val();
            var i_kapcs = $("#i_kapcs").val();
            var i_rolunk = $("#i_rolunk").val();

            if(i_nev !=''){
                $.ajax({
                    url: "../model/new_intezmeny.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                      i_nev:i_nev, 
                      i_irsz:i_irsz,
                      i_varos:i_varos,
                      i_utca:i_utca,
                      i_hsz:i_hsz,
                      i_telefon:i_telefon,
                      i_email:i_email,
                      i_kapcs:i_kapcs,
                      i_rolunk:i_rolunk
                    },
                    error: function(request){
                      alert('Ajax error: '+request.responsText);
                    },
                    success: function (data) {
                        if(data.error = "0"){
                            location.reload();
                        }else{
                            alert("Hiba ág new_intezmeny_php: "+data.error);
                        }
                    }
                });
                           
            }else{
                alert("A *-os mezőket ki kell tölteni")
            }
        }

    })

    $("#gomb_m").click(function(){
        bekuld_m()
        function bekuld_m(){
            var int_id = $("#int_id").html();
            var i_nev = $("#i_nev").val();
            var i_irsz = $("#i_irsz").val();
            var i_varos = $("#i_varos").val();
            var i_utca = $("#i_utca").val();
            var i_hsz = $("#i_hsz").val();
            var i_telefon = $("#i_telefon").val();
            var i_email = $("#i_email").val();
            var i_kapcs = $("#i_kapcs").val();
            var i_rolunk = $("#i_rolunk").val();

            if(i_nev !=''){
                $.ajax({
                    url: "../model/mod_intezmeny.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                        int_id:int_id,
                        i_nev:i_nev, 
                        i_irsz:i_irsz,
                        i_varos:i_varos,
                        i_utca:i_utca,
                        i_hsz:i_hsz,
                        i_telefon:i_telefon,
                        i_email:i_email,
                        i_kapcs:i_kapcs,
                        i_rolunk:i_rolunk
                    },
                    error: function(request){
                      alert('Ajax error: '+request.responsText);
                    },
                    success: function (data) {
                        if(data.error = '0'){
                            location.reload();
                        }else{
                        alert("Hiba ág mod_intezmeny_php: "+data.error);
                      }
                    }
                });
                           
            }else{
                alert("A *-os mezőket ki kell tölteni")
            }
        }

    })


})