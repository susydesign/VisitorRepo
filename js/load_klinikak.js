$(document).ready(function () {

 
load_klinikak();

function load_klinikak()
{ 
        $.ajax({
          url: "../php/load_klinikak.php",
          method: "POST",
          dataType: "json",
          cache: false,
          data : {db:5},
    
          error: function(request){
            alert('Ajax error: '+request.resposeText);
        },
          success: function (data) {
            if(data[0].error != ''){
              alert("load_klinikak"+data[0].error);
//              location.reload();
            }else{
              var maxklinik = data.length;
              
              for (i = 0; i<maxklinik; i++){
                alert(data[i].klinika_nev);
                klinik_card_load(data[i],i+1);

              }

            }
          }
        });

        function klinik_card_load(data,db){
          var akt_klinika_id = data.klinika_id;
          var akt_klinika_nev = data.klinika_nev;
          var akt_k_address_varos = data.k_address_varos;
          var utca_hsz = data.k_address_utca;
          var akt_k_address_hsz = data.k_address_hsz;
          var akt_k_phone = data.k_phone;
          var akt_k_logo = data.k_logo;
          var akt_k_rolunk = data.k_rolunk;

          $("#klinika-"+db).css('display','block');

          $('#k_logo_'+db).attr('src','./images/klinikak/'+akt_k_logo);
          $('#varos_'+db).html(akt_k_address_varos);
          $('#utca_hsz_'+db).html(utca_hsz+' '+akt_k_address_hsz);
          $('#phone_'+db).html(akt_k_phone);
          $('#klinika_nev_'+db).html(akt_klinika_nev);
          $('#rolunk_'+db).html(akt_k_rolunk);

        }
  }


})