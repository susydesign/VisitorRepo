$(document).ready(function () {


  $('#gomb_k_mentes').click(function(){

    var klinika_nev = $("#inp_klinika_nev").val();
    var k_address_orszag = $("#inp_k_address_orszag").val();
    var k_address_irsz = $("#inp_k_address_irsz").val();
    var k_address_varos = $("#inp_k_address_varos").val();
    var k_address_utca = $("#inp_k_address_utca").val();
    var k_address_hsz = $("#inp_k_address_hsz").val();
    var k_phone = $("#inp_k_phone").val();
    var k_mobil = $("#inp_k_mobil").val();
    var k_web = $("#inp_k_web").val();
    var k_logo = $("#inp_k_logo").val();
    var k_rolunk = $("#inp_k_rolunk").val();
    var geoframe = $("#inp_geoframe").val();




    if(klinika_nev != ''){
      $.ajax({
        url: "../php/reg_klinika.php",
        method: "POST",
        dataType: "json",
        cash: false,
        data:{
          klinika_nev:klinika_nev, 
          k_address_orszag:k_address_orszag,
          k_address_irsz:k_address_irsz,
          k_address_varos:k_address_varos,
          k_address_utca:k_address_utca,
          k_address_hsz:k_address_hsz,
          k_phone:k_phone,
          k_mobil:k_mobil,
          k_web:k_web,
          k_logo:k_logo,
          k_rolunk:k_rolunk,
          geoframe:geoframe
        },
        error: function(request){
          alert('Ajax error: '+request.responsText);
        },
        success: function (data) {
          if(data.error != ""){
            alert("Hiba ág: "+data.error);
            location.reload()
          }else{
            alert(data.klinika_nev);
          }
        }
      });
    }else{
      alert('Ki kell tölteni ezeket a mezőket!');
    }
  })

  $('#gomb_kilep').click(function() {
    $('#info_text').html('');
    location.reload();
  })



})