<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- >
    1Pt2,15
    "Mert Isten akarata az, hogy jót cselekedve némítsátok el az értelmetlen emberek tudatlanságát"
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Care</title>
    
    <meta name="googlebot" content="noindex">
    <link rel="shortcut icon" type="image/png" href="../../images/svg/Visitor-Care-logo.svg" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" type="text/css" href="../../css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../admin/view/admin.css">

</head>
<body>
    <div id=jo_wapper>
        <img src="../../images/svg/Visitor-Care-logo.svg">
        <h1 id="urlap_cim">Jelentkezési ürlap</h1>
        <h3 id="urlap_alcim">Ápoló, gondozó</h3>
        <p id="urlap_leíras">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam deleniti sequi, fugit culpa, vitae cum voluptas, aut optio amet et blanditiis fugiat at illo eos incidunt suscipit laudantium ducimus nam. Fugiat, id, totam aut qui libero sapiente, veniam dolores laboriosam perferendis quod amet hic impedit magni reprehenderit consequatur optio perspiciatis?</p>
        <div id=urlap>
        <form>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Ápoló neve</span>
                <input id="a_nev" name="a_nev" type="text" class="form-control" placeholder="Pl.: Kovács Jánosné" aria-label="a_nev" aria-describedby="a_nev">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Születési idő</span>
                <input id="a_szul" name="a_szul" type="text" class="form-control" placeholder="pl: 1978.01.01" aria-label="a_szul" aria-describedby="a_szul">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Fénykép</span>
                <input id="a_fenykep" name="a_fenykep" type="text" class="form-control" placeholder="Fénykép feltöltése" aria-label="a_fenykep" aria-describedby="a_fenykep">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Irányítószám</span>
                <input id="a_irsz" name="a_irsz" type="text" class="form-control" placeholder="pl: 2553" aria-label="o_irsz" aria-describedby="o_irsz">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Város</span>
                <input id="a_varos" name="a_varos" type="text" class="form-control" placeholder="pl: Szolnok" aria-label="o_varos" aria-describedby="o_varos">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Utca, hsz</span>
                <input id="a_utca" name="a_utca" type="text" class="form-control" placeholder="pl.:Kossuth Lajos utca 15/b" aria-label="o_utca" aria-describedby="o_utca">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Telefonszám</span>
                <input id="a_telefon" name="a_telefon" type="text" class="form-control" placeholder="pl.: +36 (30) 1234567" aria-label="o_telefon" aria-describedby="o_telefon">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">E-mail cím</span>
                <input id="a_email" name="a_email" type="text" class="form-control" placeholder="pl.: info@idosotthon.hu" aria-label="o_email" aria-describedby="o_email">
            </div>
            <h3>Végzettségi adatok</h3>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Megnevezés</span>
                <input id="a_v_megnev" name="a_v_megnev" type="text" class="form-control" placeholder="pl: Gyógytornász" aria-label="a_v_megnev" aria-describedby="a_v_megnev">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Időpontja</span>
                <input id="a_v_ido" name="a_v_ido" type="text" class="form-control" placeholder="Végzettség megszerzésének időpontja. pl: 2019.07.07" aria-label="a_v_ido" aria-describedby="a_v_ido">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Dokumentum</span>
                <input id="a_v_doksi" name="a_v_doksi" type="text" class="form-control" placeholder="Végzettséget igazoló dukumentum feltöltése" aria-label="a_v_doksi" aria-describedby="a_v_doksi">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Óradíj (óra/Ft)</span>
                <input id="a_oradij" name="a_oradij" type="text" class="form-control" placeholder="pl: 8000" aria-label="a_oradij" aria-describedby="a_oradij">
            </div>
            <div class="input-group flex-nowrap p-3">
                <span class="input-group-text w-25">Beminősítés</span>
                <input id="a_minosites" name="a_minosites" type="text" class="form-control" placeholder="pl: 3. kategória" aria-label="a_minosites" aria-describedby="a_minosites">
            </div>

            <button id="btn_bekuld" class="menu" type="submit">Beküld</button>
            <button id="btn_megse" class="menu" type="submit">Mégse</button>
        </form>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <script>
            $( function() { $( "#ker_ido" ).datepicker(); } );
        </script>
    <script src="../process/jel_apolo.js"></script>
</body>