$(document).ready(function () {

 
load_klinikak();

function load_klinikak()
{ 
        $.ajax({
          url: "../model/load_klinikak.php",
          method: "POST",
          dataType: "json",
          cache: false,
          data : {db:5},
    
          error: function(request){
            console.log('Ajax error: '+request.resposeText);
        },
          success: function (data) {
            if(data[0].error != ''){
              console.log("load_klinikak"+data[0].error);
//              location.reload();
            }else{
              var maxklinik = data.length;
              
              for (i = 0; i<maxklinik; i++){
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
          $('#klinika_id_'+db).html(akt_klinika_id);
          $('#klinika_nev_'+db).html(akt_klinika_nev);
          $('#rolunk_'+db).html(akt_k_rolunk);
        }
  }

  $("#gomb_karb_1").click(function(){
    k_id=$("#klinika_id_1").html();
    var newablak="http://visitorcare.eu/view/prof_klinika.php?k_id="+k_id;
    window.open(newablak,"newIngWindow_2");
  })
  $("#gomb_karb_2").click(function(){
    k_id=$("#klinika_id_2").html();
    var newablak="http://visitorcare.eu/view/prof_klinika.php?k_id="+k_id;
    window.open(newablak,"newIngWindow_2");
  })
  $("#gomb_karb_3").click(function(){
    k_id=$("#klinika_id_3").html();
    var newablak="http://visitorcare.eu/view/prof_klinika.php?k_id="+k_id;
    window.open(newablak,"newIngWindow_2");
  })
  $("#gomb_karb_4").click(function(){
    k_id=$("#klinika_id_4").html();
    var newablak="http://visitorcare.eu/view/prof_klinika.php?k_id="+k_id;
    window.open(newablak,"newIngWindow_2");
  })
  $("#gomb_karb_5").click(function(){
    k_id=$("#klinika_id_5").html();
    var newablak="http://visitorcare.eu/view/prof_klinika.php?k_id="+k_id;
    window.open(newablak,"newIngWindow_2");
  })

})