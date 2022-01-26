<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinika Profil</title>

    <meta name="googlebot" content="noindex">
    <link rel="shortcut icon" type="image/png" href="./images/svg/Visitor-Care-logo.svg"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="./prof_klinika.css">

</head>
<body>
    <div class="wrapper">

        <header>
            <div id="logodiv">
                <img src="../images/svg/Visitor-Care-logo.svg" alt="visitor care logo fekete" class="img-responsive">
            </div>
            <div id="kontaktok">
                <p class="eltunik" style="color: #4a4a4a;">Ügyfélszolgálat:</p>
                <p style="padding-right:5px">+36 (30) 123-4567</p>
                <p class="elvalaszto"><span>|</span></p>
                <p class="eltunik" style="color: #4a4a4a;">E-mail:</p>
                <p>info@visitorcare.eu</p>
            </div>
            <div id="info_user">
                <p id="info_userId"><?php echo $_GET['k_id'] ?></p>
            </div>
        </header>

        <nav class="nav">            
            <p>Regisztrált szakemberek az oldalon: <span>1.234 db</span></p>
                <a class="nav-link active" href="../index.php">Főoldal</a>
                <a class="nav-link" href="#">Rólunk</a>
                <a class="nav-link" href="#">Friss hírek</a>
                <a class="nav-link" href="#">Kapcsolat</a>
            </ul>
        </nav>

        <section>
              <div id="szekcio-1">
               <img id="k_logo_1" class="" src="">
                <h5 id="klinika_nev_1"class="card-title"></h5>
                <p id="varos_1"></p>
                <p id="utca_hsz_1"></p>
                <label for="phone_1" class="label_klin">Telefon</label>
                <p id="phone_1"></p>
                <label for="rolunk_1" class="label_klin">Klinika leírása</label>
                <p id="rolunk_1" class="card-text"></p>
                <a id="gomb_klinik" href="#" class="col-6 btn m-2">Módosítás</a>
            </div>
            <div id="szekczio-2">
                <div id="terkep_1">
                </div>
            </div>
        </section>

        <main>Szakrendelő adatai
            <div id="urlap">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="szak_id">Szakrendelés</label>
                        </div>
                        <select class="custom-select" id="szak_id">
                            <option selected>Vállaszzon szakrendelőt...</option>
                            <option value="1">Sürgősségi ellátás/Acut ellátás</option>
                            <option value="2">Diagnosztika</option>
                            <option value="3">Belgyógyászati ellátás</option>
                            <option value="4">Baleseti sebészet/Traumatológia</option>
                            <option value="5">Hasi sebészeti ellátás</option>
                            <option value="6">Érsebészet</option>
                            <option value="7">Szülészet</option>
                            <option value="8">Nőgyógyászat</option>
                            <option value="9">Urológia</option>
                            <option value="10">Plasztikai sebészet</option>
                            <option value="11">Fül-orr-gégészet</option>
                            <option value="12">Szemészet</option>
                            <option value="13">Pszichés támogatás</option>
                        </select>
                    </div>
<!-- Nyitva tartás -->
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day1">Hétfő</span>
                        </div>
                        <input id="day1_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day1_zar"type="text" class="form-control" placeholder="00:00" value="00:00" value="00:00">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day2">Kedd</span>
                        </div>
                        <input id="day2_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day2_zar"type="text" class="form-control" placeholder="00:00" value="00:00">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day3">Szerda</span>
                        </div>
                        <input id="day3_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day3_zar"type="text" class="form-control" placeholder="00:00" value="00:00">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day4">Csütörtök</span>
                        </div>
                        <input id="day4_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day4_zar"type="text" class="form-control" placeholder="00:00" value="00:00">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day5">Péntek</span>
                        </div>
                        <input id="day5_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day5_zar"type="text" class="form-control" placeholder="00:00" value="00:00">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day6">Szombat</span>
                        </div>
                        <input id="day6_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day6_zar"type="text" class="form-control" placeholder="00:00" value="00:00">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend" style="width: 100px;">
                            <span class="input-group-text" id="day7">Vasárnap</span>
                        </div>
                        <input id="day7_nyit" type="text" class="form-control" placeholder="00:00" value="00:00">
                        <input id="day7_zar"type="text" class="form-control" placeholder="00:00" value="00:00">
                    </div>
<!-- Nyitvatartás VÉGE -->
                    <div class="input-group mb-3 p-3">
                        <div class="form-check p-3">
                            <input type="checkbox" class="form-check-input" id="nonstop">
                            <label class="form-check-label" for="nonstop">24 órás</label>
                        </div>
                        <div class="form-check p-3">
                            <input type="checkbox" class="form-check-input" id="felnot">
                            <label class="form-check-label" for="felnot">Felnőt rendelés</label>
                        </div>
                        <div class="form-check p-3">
                            <input type="checkbox" class="form-check-input" id="gyermek">
                            <label class="form-check-label" for="gyermek>Gyermek">Gyermek rendelés</label>
                        </div>
                        <div class="form-check p-3">
                            <input type="checkbox" class="form-check-input" id="szemelyes">
                            <label class="form-check-label" for="szemelyes">Személyes</label>
                        </div>
                        <div class="form-check p-3">
                            <input type="checkbox" class="form-check-input" id="online">
                            <label class="form-check-label" for="online">On-Line rendelés</label>
                        </div>
                        <div class="form-check p-3">
                            <input type="checkbox" class="form-check-input" id="gondozas">
                            <label class="form-check-label" for="gondozas">Utógondozás</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 200px;">Telefon szám</span>
                        </div>
                        <input type="text" class="form-control" id="r_telefon" aria-label="phone mumber" placeholder="+36 30 1234567">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 200px;">Szolgáltatás ára</span>
                        </div>
                        <input type="text" class="form-control" id="ar" aria-label="Amount (to the nearest Ft)">
                        <div class="input-group-append">
                            <span class="input-group-text">Ft/óra</span>
                        </div>
                    </div>

                    <div>
                      <a id="gomb_szak" href="#" class="col-6 btn m-2">Rögzít</a>
                    </div>


                </form >
            </div>
            <div id="eredmeny" class="contaniner">
                <div class="row">
                    <div class="md-6">
                        <div id="op_rendnev"></div>
                    </div>
                    <div class="md-6">
                        <div id="op_rendphone"></div>
                    </div>
                </div>

            </div>
        </main>
        <footer>footer</footer>
    </div>

    
    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    <script src="../js/service.js"></script>
    <script src="../process/load_klinika.js"></script>
    <script src="../process/reg_rendelo.js"></script>


    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() { $( "#ker_ido" ).datepicker(); } );
    </script>



</body>
</html>