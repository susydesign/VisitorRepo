$("#myModal_regP").focus(function(){

    
    $("#jelszo2").focusout(function(){
        alert("Praxis felvitel")
        pw_eqv();
    });


    function pw_eqv(){
        var jelszo1 = $("#jelszo1").val();
        var jelszo2 = $("#jelszo2").val();

        if(jelszo1 != jelszo2){
            $("#pwinfo").html("A két jelszó nem egyezik");
        }else{
            pw_check(jelszo1);
        }
    }
    
    
    
    function pw_check(jelszo1){

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