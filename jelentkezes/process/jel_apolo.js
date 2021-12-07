$(document).ready(function () {
    $("#btn_bekuld").click(function(){

        bekuld()

        function bekuld(){
            var a_nev = $("#a_nev").val();
            var a_szul = $("#a_szul").val();
            var a_fenykep = $("#a_fenykep").val();
            var a_irsz = $("#a_irsz").val();
            var a_varos = $("#a_varos").val();
            var a_utca = $("#a_utca").val();
            var a_telefon = $("#a_telefon").val();
            var a_email = $("#a_email").val();
            var a_v_megnev = $("#a_v_megnev").val();
            var a_v_ido = $("#a_v_ido").val();
            var a_v_doksi = $("#a_v_doksi").val();
            var a_oradij = $("#a_oradij").val();
            var a_minosites = $("#a_minosites").val();
            var o_status = 0;

            if(a_nev !=''){
                $.ajax({
                    url: "../model/reg_jelapolo.php",
                    method: "POST",
                    dataType: "json",
                    cash: false,
                    data:{
                      a_nev:a_nev, 
                      a_szul:a_szul,
                      a_fenykep:a_fenykep,
                      a_irsz:a_irsz,
                      a_varos:a_varos,
                      a_utca:a_utca,
                      a_telefon:a_telefon,
                      a_email:a_email,
                      a_v_megnev:a_v_megnev,
                      a_v_ido:a_v_ido,
                      a_v_doksi:a_v_doksi,
                      a_oradij:a_oradij,
                      a_minosites:a_minosites,
                      o_status:o_status
                    },
                    error: function(request){
                      alert('Ajax error: '+request.responsText);
                    },
                    success: function (data) {
                        if(data.error != "0"){
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
