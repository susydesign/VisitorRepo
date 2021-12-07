$(document).ready(function () {
    $("#btn_bekuld").click(function(){

        bekuld()

        function bekuld(){
            var o_nev = $("#o_nev").val();
            var o_irsz = $("#o_irsz").val();
            var o_varos = $("#o_varos").val();
            var o_utca = $("#o_utca").val();
            var o_telefon = $("#o_telefon").val();
            var o_email = $("#o_email").val();
            var o_kapcs = $("#o_kapcs").val();
            var o_status = 0;

            if(o_nev !=''){
                $.ajax({
                    url: "../model/reg_jelotthon.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                      o_nev:o_nev, 
                      o_irsz:o_irsz,
                      o_varos:o_varos,
                      o_utca:o_utca,
                      o_telefon:o_telefon,
                      o_email:o_email,
                      o_kapcs:o_kapcs,
                      o_status:o_status
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
