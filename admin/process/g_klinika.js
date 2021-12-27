$(document).ready(function () {

    $("#showData").on('click','.ezt', function(){

        $("#ok_card").css('display','grid');

        var currentRow=$(this).closest("tr");

        var akt_k_id = currentRow.find("td:eq(0)").text();
        var akt_k_nev = currentRow.find("td:eq(1)").text();
        var akt_k_irsz = currentRow.find("td:eq(2)").text();
        var akt_k_varos = currentRow.find("td:eq(3)").text();
        var akt_k_utca = currentRow.find("td:eq(4)").text();
        var akt_k_hsz = currentRow.find("td:eq(5)").text();
        var akt_k_phone = currentRow.find("td:eq(6)").text();
        var akt_k_mobil = currentRow.find("td:eq(7)").text();
        var akt_k_email = currentRow.find("td:eq(8)").text();
        var akt_k_web = currentRow.find("td:eq(9)").text();
        var akt_k_logo = currentRow.find("td:eq(10)").text();
        var akt_k_rolunk = currentRow.find("td:eq(11)").text();
        var akt_k_geoframe = currentRow.find("td:eq(12)").text();

          
        $('#o_id').html(akt_k_id)
        $('#klinika_nev_1').html(akt_k_nev);
        $('#k_address_irsz').val(akt_k_irsz);
        $('#k_address_varos').val(akt_k_varos);
        $('#k_address_utca').val(akt_k_utca);
        $('#k_address_hsz').val(akt_k_hsz);
        $('#phone_1').html(akt_k_phone);
        $('#k_mobil').val(akt_k_mobil);
        $('#k_email').val(akt_k_email);
        $('#k_web').val(akt_k_web);
        $('#k_logo_1').html(akt_k_logo);
        $('#rolunk_1').html(akt_k_rolunk);
        $('#terkep_1').html(akt_k_geoframe);
    });

    load_klinikak();
    
    function load_klinikak()
    { 
        $.ajax({
            url: "../model/m_load_klinikak.php",
            method: "POST",
            dataType: "json",
            cache: false,                       
            error: function(request, message, error){
                console.log('Ajax error: '+request.responseText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {

                productListSuccess(products);

                if(products[0].error != '0'){
                    console.log("load_klinikak"+products.error);
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
                        "data-id='" + product.klinika_id + "'>" +
                        "<span class='glyphicon glyphicon-edit' />"
                    + product.klinika_id+"</button>" +
                "</td>" +
                "<td>" + product.klinika_nev + "</td>" +
                "<td>" + product.k_address_irsz + "</td>" +
                "<td>" + product.k_address_varos + "</td>" +
                "<td>" + product.k_address_utca + "</td>" +
                "<td>" + product.k_address_hsz + "</td>" +
                "<td>" + product.k_phone + "</td>" +
                "<td>" + product.k_mobil + "</td>" +
/*                 "<td>" + product.k_email + "</td>" + */
                "<td>" + product.k_web + "</td>" +
                "<td>" + product.k_logo + "</td>" +
                "<td>" + product.k_rolunk + "</td>" +
/*                 "<td>" + product.geoframe + "</td>" + */
              "</tr>";
            return ret;
          }
  }









    $("#btn_bekuld").click(function(){
        bekuld()
        function bekuld(){
            var klinika_nev = $("#klinika_nev").val();
            var k_address_irsz = $("#k_address_irsz").val();
            var k_address_varos = $("#k_address_varos").val();
            var k_address_utca = $("#k_address_utca").val();
            var k_address_hsz = $("#k_address_hsz").val();
            var k_phone = $("#k_phone").val();
            var k_mobil = $("#k_mobil").val();
            var k_email = $("#k_email").val();
            var k_web = $("#k_web").val();
            var k_logo = $("#k_logo").val();
            var k_rolunk = $("#k_rolunk").val();
            var geoframe = $("geoframe").val();

            if(klinika_nev !=''){
                $.ajax({
                    url: "../model/reg_klinika.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                      klinika_nev:klinika_nev, 
                      k_address_irsz:k_address_irsz,
                      k_address_varos:k_address_varos,
                      k_address_utca:k_address_utca,
                      k_address_hsz:k_address_hsz,
                      k_phone:k_phone,
                      k_mobil:k_mobil,
                      k_email:k_email,
                      k_web:k_web,
                      k_logo:k_logo,
                      k_rolunk:k_rolunk,
                      geoframe:geoframe,
                    },
                    error: function(request){
                      alert('Ajax error: '+request.responsText);
                    },
                    success: function (data) {
                      if(data.error != ""){
                        alert("Hiba ág: "+data.error);
                        window.close()
                    }else{
                        alert("Jelentkezési ürlap rögzítve")
                        window.close()
                      }
                    }
                });
                           
            }else{
                alert("A *-os mezőket ki kell tölteni")
            }
        }

    })

    $("#btn_megse").click(function(){
        window.close()
    })
});
