$(document).ready(function () {
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
