$(document).ready(function () {

$('#chb_tobb').click(function(){
  var checkBox = document.getElementById("chb_tobb");
  if (checkBox.checked == true){
    $('#tobbadat').css("display", "block");
  } else {
    $('#tobbadat').css("display", "none");
  }
  
  
})

  $('#modal_btnreg').click(function(){
    var felh_name = $("#input_Felh_name").val();
    var email = $("#input_Email").val();

/*    
var jelszo = $("#inputPassword1").val();
    var email = $("#inputEmail").val();
    var phone = $("#inputPhone").val();
    var u_address_orszag = $("#inputCountry").val();
    var u_address_irsz = $("#inputZip").val();
    var u_address_varos = $("#inputCity").val();
    var u_address_utca = $("#inputStreet").val();
    var u_address_hsz = $("#inputHsz").val();
    var u_address_em = $("#inputEm").val();
    var u_address_ajto = $("#inputDoor").val();
    var u_address_hrsz = $("#inputHrsz").val();
 */

    if(felh_name != ''/*  && jelszo !='' */){
      $.ajax({
        url: "../php/regisztracio.php",
        method: "POST",
        dataType: "json",
        cash: false,
        data:{
              felh_name:felh_name, 
              email:email
            },
/* 
        data:{felh_name:felh_name, last_name:last_name,first_name:first_name,email:email,phone:phone,u_address_orszag:u_address_orszag,u_address_irsz:u_address_irsz,u_address_varos:u_address_varos,u_address_utca:u_address_utca,u_address_hsz:u_address_hsz,u_address_em:u_address_em,u_address_ajto:u_address_ajto,u_address_hrsz:u_address_hrsz},

 */
        error: function(request){
          alert('Ajax error: '+request.responsText);
        },
        success: function (data) {
          if(data.error == "Van"){
            alert("Hiba ág");
            location.reload()
          }else{
            $('#myModalReg').modal('hide');
            $('#info_text').html(data.felh_name);
            gombrendez(data.felh_name, data.user_id);
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

  function gombrendez(felhasznalo, felh_id){
    var aktuser = felhasznalo;
    var aktid = felh_id;

    if(aktuser !=""){
      document.getElementById("gomb_log").style.display="none";
      document.getElementById("gomb_reg").style.display="none";
      document.getElementById("gomb_kilep").style.display="block";
      $('#info_userId').html(aktid);
      $('#info_userNev').html(aktuser);
      $('#cegSelect').css('display','block');
    }else{
      document.getElementById("gomb_kilep").style.display="none";
      document.getElementById("gomb_log").style.display="block";
      document.getElementById("gomb_reg").style.display="block";
  //    document.getElementById("gomm_log").innerHTML="Bejelentkezés";
    }
  }


})