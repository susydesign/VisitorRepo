$(document).ready(function () {

    $("#showData").on('click','.ezt', function(){

        $("#a_card").css('display','grid');
        $("#urlap").css('display','block');

        var currentRow=$(this).closest("tr");

        var akt_a_id = currentRow.find("td:eq(0)").text();
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
        $('#a_id').html(akt_a_id)
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
        $('#a_status').val(akt_a_status);
    
    });

    load_klinikak();
    
    function load_klinikak()
    { 
        $.ajax({
            url: "../model/load_apolo.php",
            method: "POST",
            dataType: "json",
            cache: false,                       
            error: function(request, message, error){
                console.log('Ajax error: '+request.responseText+' msg: '+message+' error: '+error);
            },    
            success: function (products) {
                if(products[0].error != '0'){
                    console.log("load_apolo - "+products.error);
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
                            "data-id='" + product.a_id + "'>" +
                            "<span class='glyphicon glyphicon-edit' />"
                        + product.a_id+"</button>" +
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
                    "<td><div id='a_tatus' class='max-text'>" + product.a_bemut + "</div></td>" +
                    "<td>" + product.a_minosites + "</td>" +
                    "<td>" + product.a_status + "</td>" + 
                "</tr>";
            return ret;
          }
  }


/*     $("#gomb_c").click(function(){
        if($("#klinika_id").html() != ''){
            location.reload();
        }

        bekuld_c()
        function bekuld_c(){
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
                    url: "../model/new_klinika.php",
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
                        if(data.error = "0"){
                            location.reload();
                        }else{
                            alert("Hiba ág: "+data.error);
                        }
                    }
                });
                           
            }else{
                alert("A *-os mezőket ki kell tölteni")
            }
        }

    })
 */
    $("#gomb_m").click(function(){
        bekuld_m()
        function bekuld_m(){
            var a_id = $("#a_id").html();
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
    
            if(a_nev !=''){
                $.ajax({
                    url: "../model/mod_apolo.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                        a_id:a_id,
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
                        a_oradij:a_oradij,
                        a_minosites:a_minosites,
                        a_status:a_status
                    },
                    error: function(request){
                      alert('Ajax error: '+request.responsText);
                    },
                    success: function (data) {
                        if(data.error = '0'){
                            location.reload();
                        }else{
                        alert("Hiba ág: "+data.error);
                      }
                    }
                });
                           
            }else{
                alert("A *-os mezőket ki kell tölteni")
            }
        }

    })

    $("#gomb_d").click(function(){
        bekuld_d()
        function bekuld_d(){
            var a_id = $("#a_id").html();
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
            var a_status = 3;
    
            if(a_nev !=''){
                $.ajax({
                    url: "../model/mod_apolo.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                        a_id:a_id,
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
                        a_oradij:a_oradij,
                        a_minosites:a_minosites,
                        a_status:a_status
                    },
                    error: function(request){
                      alert('Ajax error: '+request.responsText);
                    },
                    success: function (data) {
                        if(data.error = '0'){
                            location.reload();
                        }else{
                        alert("Hiba ág: "+data.error);
                      }
                    }
                });
                           
            }else{
                alert("A *-os mezőket ki kell tölteni")
            }
        }

    })


    
    $("#szak_id").change(function () {
        var newLine = "\r\n";
        var msg = "Ezt a részt átt kell beszéljük!";
        msg += newLine;
        msg += "Egy ápolónak több szakterülete is lehet(?)";
        msg += newLine;
        msg +="Szakterületenként különböző időpontokat adhat meg(?)"
        msg += newLine;
        msg += "Szakterületenként más, és más árral dolgozhat(?)"

        alert(msg)
/*         var szak_id = $("#szak_id").val();
        var klinika_id = $("#klinika_id").html();

        if(klinika_id == ''){
            alert("Ki kell választani egy klinikát!");
            $("#szak_id").val('0');
        }else{
            if(szak_id == '0'){
                alert("Ki kell választani egy szakrendelést!")
            }else{
                idopont_Nullaz();
                load_szakrendelo(szak_id,klinika_id);
                $("#gomb_szak").click(function () {
                    rendelo_id = $("#rendelo_id").html();
                    modify_nyitvatartas(rendelo_id);
                    modify_szakrendelo(rendelo_id);
                })
            }
        }

        function idopont_Nullaz() {
            $("#day1_nyit").val("00:00");
            $("#day1_zar").val("00:00");
            $("#day2_nyit").val("00:00");
            $("#day2_zar").val("00:00");
            $("#day3_nyit").val("00:00");
            $("#day3_zar").val("00:00");
            $("#day4_nyit").val("00:00");
            $("#day4_zar").val("00:00");
            $("#day5_nyit").val("00:00");
            $("#day5_zar").val("00:00");
            $("#day6_nyit").val("00:00");
            $("#day6_zar").val("00:00");
            $("#day7_nyit").val("00:00");
            $("#day7_zar").val("00:00");
        }


        function new_r_nyitvatartas(rendelo_id) {
            $.ajax({
                url: "../model/new_r_nyitvatartas.php",
                method: "POST",
                dataType: "json",
                cash: false,
                data: {
                    rendelo_id:rendelo_id
                },
                success: function (data) {
                    if(data.error != '0'){
                        alert('Nem jött létre Nyitvatartás'+data.error);
                    }
                },
                error: function(request) {
                    alert('Ajax error new_nyitvatartas:'+request.responsText);
                }
            });
        }
        function load_nyitvatartas(rendelo_id) {
            $.ajax({
                url: "../model/load_r_nyitvatartas.php",
                method: "POST",
                dataType: "json",
                cash: false,
                data:{
                    rendelo_id:rendelo_id
                },
                error: function(request){
                  alert('Ajax error: '+request.responsText);
                },
                success: function (data) {
                    if(data[0].error == '0'){
                        $("#day1_nyit").val(data[0].day1_nyit);
                        $("#day1_zar").val(data[0].day1_zar);
                        $("#day2_nyit").val(data[0].day2_nyit);
                        $("#day2_zar").val(data[0].day2_zar);
                        $("#day3_nyit").val(data[0].day3_nyit);
                        $("#day3_zar").val(data[0].day3_zar);
                        $("#day4_nyit").val(data[0].day4_nyit);
                        $("#day4_zar").val(data[0].day4_zar);
                        $("#day5_nyit").val(data[0].day5_nyit);
                        $("#day5_zar").val(data[0].day5_zar);
                        $("#day6_nyit").val(data[0].day6_nyit);
                        $("#day6_zar").val(data[0].day6_zar);
                        $("#day7_nyit").val(data[0].day7_nyit);
                        $("#day7_zar").val(data[0].day7_zar);
                    }else{
                        alert("Nyincs nyitvatartás: "+data[0].error);
                  }
                }
            });       
        }
        function modify_nyitvatartas(rendelo_id) {
            var day1_nyit = $("#day1_nyit").val();
            var day1_zar = $("#day1_zar").val();
            var day2_nyit = $("#day2_nyit").val();
            var day2_zar = $("#day2_zar").val();
            var day3_nyit = $("#day3_nyit").val();
            var day3_zar = $("#day3_zar").val();
            var day4_nyit = $("#day4_nyit").val();
            var day4_zar = $("#day4_zar").val();
            var day5_nyit = $("#day5_nyit").val();
            var day5_zar = $("#day5_zar").val();
            var day6_nyit = $("#day6_nyit").val();
            var day6_zar = $("#day6_zar").val();
            var day7_nyit = $("#day7_nyit").val();
            var day7_zar = $("#day7_zar").val();


            $.ajax({
                url: "../model/mod_r_nyitvatartas.php",
                method: "POST",
                dataType: "json",
                cash: false,
                data:{
                    rendelo_id:rendelo_id,
                    day1_nyit:day1_nyit,
                    day1_zar:day1_zar,
                    day2_nyit:day2_nyit,
                    day2_zar:day2_zar,
                    day3_nyit:day3_nyit,
                    day3_zar:day3_zar,
                    day4_nyit:day4_nyit,
                    day4_zar:day4_zar,
                    day5_nyit:day5_nyit,
                    day5_zar:day5_zar,
                    day6_nyit:day6_nyit,
                    day6_zar:day6_zar,
                    day7_nyit:day7_nyit,
                    day7_zar:day7_zar
                },
                error: function(request){
                  alert('Ajax error: '+request.responsText);
                },
                success: function (data) {
                    if(data.error != '0'){
                        alert("HIBA r_nyitvatartas: "+data.error);
                    }
                }
            });       
        }

        function new_szakrendelo(klinika_id) {
            $.ajax({
                url: "../model/new_szakrendelo.php",
                method: "POST",
                dataType: "json",
                cash: false,
                data: {
                    klinika_id:klinika_id,
                    szak_id:szak_id
                },
                success: function (data) {
                    if(data.error != '0'){
                        alert('Nincs szakrendelo JSON'+data.error);
                    }else{
                        new_r_nyitvatartas(data.rendelo_id)
                    }
                },
                error: function(request) {
                    alert('Ajax error new_szakrenedelo:'+request.responsText);
                }
            });
        }
        function load_szakrendelo(szak_id,klinika_id) {
            $.ajax({
                url: "../model/load_szakrendelo.php",
                method: "POST",
                dataType: "json",
                cash: false,
                data:{
                    klinika_id:klinika_id,
                    szak_id:szak_id
                },
                error: function(request){
                  alert('Ajax error: '+request.responsText);
                },
                success: function (data) {
                    if(data[0].error == '0'){
                        $("#nonstop").prop('checked',data[0].nonstop == '1');
                        $("#felnot").prop('checked',data[0].felnot == '1');
                        $("#gyermek").prop('checked',data[0].gyermek == '1');
                        $("#szemelyes").prop('checked',data[0].szemelyes == '1');
                        $("#online").prop('checked',data[0].online == '1');
                        $("#gondozas").prop('checked',data[0].gondozas == '1');
                        $("#r_telefon").val(data[0].r_telefon);
                        $("#ar").val(data[0].ar);
                        $("#rendelo_id").html(data[0].rendelo_id);

                        load_nyitvatartas(data[0].rendelo_id);

                    }else{
                        //Új adatok Előszőr a szakrendelo, majd a r_nyitvatartas táblákba
                        new_szakrendelo(klinika_id,szak_id);
                    }
                }       
            });       
        }
        function modify_szakrendelo(rendelo_id) {
            var felnot = $("#felnot").is(":checked")
            var nonstop = $("#nonstop").is(':checked');
            var gyermek = $("#gyermek").is(':checked');
            var szemelyes = $("#szemelyes").is(':checked');
            var online = $("#online").is(':checked');
            var gondozas = $("#gondozas").is(':checked');
            var r_telefon = $("#r_telefon").val();
            var ar = $("#ar").val();

            $.ajax({
                url: "../model/mod_szakrendelo.php",
                method: "POST",
                dataType: "json",
                cash: false,
                data:{
                    rendelo_id:rendelo_id,
                    felnot:felnot,
                    gyermek:gyermek,
                    szemelyes:szemelyes,
                    online:online,
                    nonstop:nonstop,
                    gondozas:gondozas,
                    r_telefon:r_telefon,
                    ar:ar
                },
                error: function(request){
                  alert('Ajax error: '+request.responsText);
                },
                success: function (data) {
                    if(data.error != '0'){
                        alert('HIBA Szakrendelő Modify');
                    }
                }       
            });       
        }
 */        

    });
    
});
