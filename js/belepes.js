$(document).ready(function () {

  $('#modal_btnlog').click(function(){
   
    var felh_nev = $("#felh_nev").val();
    var jelszo = $('#jelszo').val();

load_data();

function load_data()
{ 
  if(felh_nev != ''/*  && jelszo !='' */){
        $.ajax({
          url: "../php/belepes.php",
          method: "POST",
          dataType: "json",
          cache: false,
          data:{
            felh_nev:felh_nev,
            jelszo:jelszo
          },
          error: function(request){
            alert('Ajax error: '+request.resposeText+'  p: '+felh_nev);
        },
          success: function (data) {
            if(data.error != ''){
              alert(data.error);
              location.reload();
            }else{
              var akt_user_id = data.felh_id;
              var akt_user_nev = data.felh_nev;
              var akt_user_role = data.role;

              $('#myModalLog').modal('hide');
              $('#info_userId').html(akt_user_id);
              $('#info_userNev').html(akt_user_nev);
          
              gombrendez(akt_user_role);
            }
          }
        });
      }else{
          alert('Ki kell tölteni ezeket a mezőket!');
        }
    }
  })

  $('#gomb_kilep').click(function() {
    $('#info_userId').html('');
    $('#info_userNev').html('');
    $('#gomb_kilep').css("display","none");
    $('#gomb_reg_p').css("display","none");
    $('#gomb_reg_a').css("display","none");
    $('#gomb_log').css("display","block");
location.reload();
  })

  function gombrendez(akt_user_role){
    var aktuser = document.getElementById("info_userNev").innerText;

    switch(akt_user_role){
      case "0":
        $('#gomb_kilep').css("display","block");
        $('#gomb_log').css("display","none");
        $('#gomb_reg_p').css("display","block");
        $('#gomb_reg_a').css("display","block");
      case "1":
      case "2":
    }

  }


})