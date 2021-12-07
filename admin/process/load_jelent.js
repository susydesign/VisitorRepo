/* prof_klinkika.php hívja */

$(document).ready(function () {

  
load_otthon();

function load_otthon()
{ 
        $.ajax({
          url: "../model/m_load_jelent.php",
          method: "POST",
          dataType: "json",
          cache: false,
    
          error: function(request){
            console.log('Ajax error: '+request.resposeText);
        },
          success: function (data) {
            if(data[0].error != ''){
              console.log("load_jelentkezok"+data[0].error);
            }else{
              var maxklinik = data.length;
              for (i = 0; i<maxklinik; i++){
                otthon_card_load(data[i],i+1);
              }
            }
          }
        });

        function otthon_card_load(data,db){
          var akt_o_id = data.jel_o_id;
          var akt_o_nev = data.o_nev;
          var akt_o_irsz = data.o_irsz;
          var akt_o_varos = data.o_varos;
          var akt_o_utca = data.o_utca;
          var akt_o_telefon = data.o_telefon;
          var akt_o_email = data.o_email;
          var akt_o_kapcs = data.o_kapcs;
          var akt_o_status = data.o_status

          $("#jel_otthon_"+db).css('display','block');

          $('#o_status_'+db).html(akt_o_status)
          $('#o_id_'+db).html(akt_o_id)
          $('#o_nev_'+db).html(akt_o_nev);
          $('#o_varos_'+db).html(akt_o_irsz+" "+akt_o_varos);
          $('#o_utca_'+db).html(akt_o_utca);
          $('#o_telefon_'+db).html(akt_o_telefon);
          $('#o_emial_'+db).html(akt_o_email);
          $('#o_kapcs_'+db).html(akt_o_kapcs);
        }
  }

})