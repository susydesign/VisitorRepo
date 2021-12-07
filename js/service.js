$(document).ready(function () {
    $("#jel_otthon").click(function(){
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=800,height=700`;
        var newablak="http://visitorcare.eu/jelentkezes/view/jelent_otthon.php";
        window.open(newablak,"jelentkez",params);
    });
    $("#jel_apolo").click(function(){
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
        width=800,height=700`;        
        var newablak="http://visitorcare.eu/jelentkezes/view/jelent_apolo.php";
        window.open(newablak,"jelentkez",params);
    });
});
$("#myModal_regP").focus(function(){
   
    $("#inputPassword2").focusout(function(){
        var felh_name=$("#input_Felh_name").val();
        var jelszo1 = $("#inputPassword1").val();
        var jelszo2 = $("#inputPassword2").val();
        
        if(jelszo1 != jelszo2){
            $("#pwinfo").html("A két jelszó nem egyezik");
        }else{
            felh_check(felh_name);
        }
    });
    
    function felh_check(felh_name){

        var respons = true;
        $.ajax({
            url: "../php/service.php",
            method: "POST",
            dataType: "json",
            data: {
                jelszo:jelszo1
                },
            error: function(request){
                alert('Ajax error in service: '+request.responseText);
                },
            success: function (data) {
                if(data.error !=""){
                    alert("Hiba: "+data.error);
                    respons=false;
                    location.reload;
                }else{


                }
            }
        });
    }
})