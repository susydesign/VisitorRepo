$(document).ready(function () {

  $('#modal_btnlog').click(function(){
   
    var felh_nev = $("#felh_nev").val();
/*     var jelszo = $('#jelszo').val(); */

load_data();

function load_data()
{ 
  if(felh_nev != ''/*  && jelszo !='' */){
        $.ajax({
          url: "../php/belepes.php",
          method: "POST",
          dataType: "json",
          cache: false,
          data:{felh_nev:felh_nev},
          error: function(request){
            alert('Ajax error: '+request.resposeText+'  p: '+felh_nev);
        },
          success: function (data) {
            if(data.felh_nev == 'Nincs'){
              alert("Nincs ilyen felhasználó");
              location.reload();
            }else{
              var akt_user_id = data.felh_id;
              var akt_user_nev = data.felh_nev;
              $('#myModalLog').modal('hide');
              $('#info_userId').html(akt_user_id);
              $('#info_userNev').html(akt_user_nev);
              $('#gomb_kilep').css("display","block");
              $('#gomb_log').css("display","none");
              $('#gomb_reg').css("display","block");
          
              //gombrendez();
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
    $('#gomb_log').css("display","block");
    location.reload();
  })

  function gombrendez(){
    var aktuser = document.getElementById("info_userNev").innerText;

    if(aktuser !=""){
      document.getElementById("gomb_log").style.display="none";
      document.getElementById("gomb_reg").style.display="none";
      document.getElementById("gomb_kilep").style.display="block";
    }else{
      document.getElementById("cegSelect").style.display="none";
      document.getElementById("profSelect").style.display="none";
      document.getElementById("gomb_kilep").style.display="none";
      document.getElementById("gomb_log").style.display="block";
      document.getElementById("gomb_reg").style.display="block";
    }
  }


})