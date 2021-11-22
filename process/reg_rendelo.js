/* Rendelő rögzítése - /view/prof_klinkia.php scriptje tölti be.*/
$("#gomb_szak").click(function (e) { 
  e.preventDefault();
  var klinika_id = $("#info_userId").html();
  var szak_id=$("#szak_id").val();
  var felnot = $("#felnot").is(':checked');
  var gyermek = $("#gyermek").is(':checked');
  var nonstop = $("#nonstop").is(':checked');
  var szemelyes = $("#szemelyes").is(':checked');
  var online = $("#online").is(':checked');
  var gondozas = $("#gondozas").is(':checked');
  var ar = $("#ar").val();

  adatok_ok=true;
 
  ajaxStart();

  function ajaxStart(){
    if(adatok_ok){
      $.ajax({
        url: "../model/reg_rendelo.php",
        method: "POST",
        dataType: "json",
        cash: false,
        data:{
              klinika_id:klinika_id,
              szak_id:szak_id,
              nonstop:nonstop,
              felnot:felnot,
              gyermek:gyermek,
              szemelyes:szemelyes,
              online:online,
              gondozas:gondozas,
              ar:ar
            },
        error: function(request){
          alert('Ajax error rend: '+request.responsText);
        },
        success: function (data) {
          if(data.error == "0"){
            nyitvatartas(data.rendelo_id);
          }else{
            alert("Hiba ág: "+data.error);
          }
        }
      });

    }else{
      alert("A csillaggal jelölt mezők kitöltése kötelező");
    }


    function nyitvatartas(rendelo_id){
      var day1_nyit = $("#day1_nyit").val();
      var day1_zar = $("#day1_zar").val();
      var day2_nyit = $("#day2_nyit").val();
      var day2_zar = $("#day2_zar").val();
      var day3_nyit = $("#day3_nyit").val();
      var day3_zar = $("#day3_zar").val();
      var day4_nyit = $("#day4_nyit").val();
      var day4_zar = $("#day4_zar").val();
      var day5_nyit = $("#day5_nyit").val();
      var day5_zar = $("#day5_zar").val();
      var day6_nyit = $("#day6_nyit").val();
      var day6_zar = $("#day6_zar").val();
      var day7_nyit = $("#day7_nyit").val();
      var day7_zar = $("#day7_zar").val();

      ajaxnyitas(rendelo_id)

      function ajaxnyitas(rendelo_id){
        $.ajax({
          url: "../model/reg_nyitva.php",
          method: "POST",
          dataType: "json",
          cash: false,
          data:{
                rendelo_id:rendelo_id,
                day1_nyit:day1_nyit,
                day1_zar:day1_zar,
                day2_nyit:day2_nyit,
                day2_zar:day2_zar,
                day3_nyit:day3_nyit,
                day3_zar:day3_zar,
                day4_nyit:day4_nyit,
                day4_zar:day4_zar,
                day5_nyit:day5_nyit,
                day5_zar:day5_zar,
                day6_nyit:day6_nyit,
                day6_zar:day6_zar,
                day7_nyit:day7_nyit,
                day7_zar:day7_zar,
              },
          error: function(request){
            alert('Ajax error nyitva: '+request.responsText);
          },
          success: function (data) {
            if(data.error == "0"){
              alert(data.rendelo_id);
            }else{
              alert("Hiba ág: "+data.error);
            }
          }
        });
      }
      
    }


  }


});