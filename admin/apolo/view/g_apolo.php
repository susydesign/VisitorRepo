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
    
    <link rel="stylesheet" type="text/css" href="../../../css/jquery-ui.min.css">
<!--     <link rel="stylesheet" type="text/css" href="../../../css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../../view/admin.css">
    <link rel="stylesheet" type="text/css" href="g_apolo.css">


</head>
<body>
    <div id="wrapper_main">
        <div id="header_vc">
            <div id="logodiv">
                <img src="../../../images/svg/Visitor-Care-logo.svg" alt="visitor care logo fekete" class="img-responsive">
            </div>
            <div id="kontaktok" style="padding-top: 5px;">
                    <p>Ügyfélszolgálat:</p>
                    <p style="color: #E6426E">+36 (30) 123-4567</p>
                    <p class="elvalaszto" style="padding:0 5px 0 5px"><span>|</span></p>
                    <p>E-mail:</p>
                    <p style="color: #E6426E">info@visitorcare.eu</p>
            </div>
            <a href="../../../index.php" id="gomb_kilep" class="menu" type="button">Kilépés</a>
        </div>

        <div id="wrapper">
            <div id="menu_oldal">
                <p id="menu1" class="menu"><a href="../../view/g_klinika.php">Magánklinikák</a></p>
                <p id="menu2" class="menu"><a href="../../intezmeny/view/intezmeny.php">Intézmények</a></p>
                <a id="menu3" class="menu aktiv" href="../../apolo/view/g_apolo.php">Ápolók</a>
                <p id="menu4" class="menu">Hírek</p>
                <p id="menu5" class="menu">Bannerek</p>
                <p id="menu7" class="menu"><a href="../../view/jelentkezok.php">Új jelentkezők</a></p>
                <p id="menu6" class="menu"><a href="../../../index.php">Home</a></p>
            </div>
            <div id="session">
                <h1 id="sess_cim">Ápolók oldal</h1>
                <p id="info_userId"></p>
                <p id="sess_desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit dignissimos unde, dolorem omnis mollitia recusandae earum iusto delectus obcaecati et facere sapiente vitae, error placeat eaque reiciendis. Eligendi aliquam at totam doloribus ipsum dignissimos voluptatibus error ratione temporibus molestiae natus debitis ducimus dolorem iusto est cupiditate alias perferendis, sapiente praesentium.</p>
                <div id="sess_torzs">
                    <div id="showData_div">
                        <table id="showData" 
                            class="table table-bordered 
                                    table-condensed table-striped">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Név</th>
                                <th>Fénykép</th>
                                <th>Születési idő</th>
                                <th>Irsz</th>
                                <th>Város</th>
                                <th>utca</th>
                                <th>hsz</th>
                                <th>Telefon</th>
                                <th>E-mail</th>
                                <th>Végzettség</th>
                                <th>Végz. év</th>
                                <th>Végz. doksi</th>
                                <th>Óradíj</th>
                                <th>Minősítés</th>
                                <th>status</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <form id="a_card">
                        <p id="a_id" class="hide"></p>
                        <img id="fenykep" class="" src="">
                        <input type="text" name="a_fenykep" id="a_fenykep" placeholder="logo fájl neve">
                        <input type="text" name="a_szul" id="a_szul" placeholder="Születési dátum">
                        <input type="text" name="a_nev" id="a_nev" placeholder="Ápolo neve">
                        <input type="text" name="a_varos" id="a_varos" placeholder="Település neve"></input>

                        <p id="elerhetoseg_cim" class="label_klin">Elérhetőségek:</p>
                        <input type="text" name="a_irsz" id="a_irsz" placeholder="Irányítószám"></input>
                        <input type="text" name="a_utca" id="a_utca" placeholder="Utca neve"></input>
                        <input type="text" name="a_hsz" id="a_hsz" placeholder="Házszám"></input>
                        <input type="phone" name="a_telefon" id="a_telefon" placeholder="Telefonszám"></input>
                        <input type="email" name="a_email" id="a_email" placeholder="E-mail"></input>

                        <p id="rolunk_cim" class="label_klin">Ápló bemutatkozása</p>
                        <input type="text" name="a_v_megnev" id="a_v_megnev" placeholder="Végzettség. pl.: Masszőr"></input>
                        <input type="text" name="a_v_ido" id="a_v_ido" placeholder="Végzettség időpontja"></input>
                        <input type="text" name="a_v_doksi" id="a_v_doksi" placeholder="doksi neve. pl.: diploma.pdf"></input>
                        <input type="text" name="a_oradij "id="a_oradij" class="card-text" placeholder="Ft / Óra"></input>
                        <input type="text" name="a_minosites "id="a_minosites" class="card-text" placeholder="Minősítés 1-5-ig"></input>
                        <input type="text" name="a_v_doksi" id="a_v_doksi" placeholder="doksi neve. pl.: diploma.pdf"></input>
                        <input type="text" name="a_bemutatkozo" id="a_bemutatkozo" placeholder="Rövid, szakmai bemutatkozó"></input>
                        <a id="gomb_m" href="#" class="col-6 btn m-2">Módosítás</a>
                        <a id="gomb_c" href="#" class="col-6 btn m-2">Új Ápoló</a>
                    </form>
                    <div id="urlap" class="hide">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="szak_id">Szakterület</label>
                                </div>
                                <select class="custom-select" id="szak_id">
                                    <option value="0" selected>Válasszon szakterületet...</option>
                                    <option value="1">Általános ápoló</option>
                                    <option value="2">Gyógymasszőr</option>
                                    <option value="3">Gyógytornász</option>
                                    <option value="4">Betegszállítás</option>
                                </select>
                                <p id="rendelo_id" class="hide">RI</p>
                            </div>
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
        

                            <div class="input-group mb-3 p-3">
                                <div class="form-check p-3">
                                    <input type="checkbox" class="form-check-input" id="nonstop">
                                    <label class="form-check-label" for="nonstop">24 órás</label>
                                </div>
                                <div class="form-check p-3">
                                    <input type="checkbox" class="form-check-input" id="felnot">
                                    <label class="form-check-label" for="felnot">Újszülött</label>
                                </div>
                                <div class="form-check p-3">
                                    <input type="checkbox" class="form-check-input" id="gyermek">
                                    <label class="form-check-label" for="gyermek>Gyermek">Gyermek gonozás</label>
                                </div>
                                <div class="form-check p-3">
                                    <input type="checkbox" class="form-check-input" id="szemelyes">
                                    <label class="form-check-label" for="szemelyes">Személyes</label>
                                </div>
                                <div class="form-check p-3">
                                    <input type="checkbox" class="form-check-input" id="online">
                                    <label class="form-check-label" for="online">On-line</label>
                                </div>
                                <div class="form-check p-3">
                                    <input type="checkbox" class="form-check-input" id="gondozas">
                                    <label class="form-check-label" for="gondozas">Utógondozás</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 200px;">Telefonszám</span>
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
                                    <span class="input-group-text">Ft</span>
                                </div>
                            </div>

                            <div>
                            <a id="gomb_szak" href="#" class="col-6 btn m-2">Rögzít</a>
                            </div>
                        </form >
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
                    </div>
                </div> <!-- sess_torzs END -->
            </div>  <!-- session END -->
        </div> <!-- wrapper END -->

        <footer class="text-center text-lg-start bg-dark text-muted">
            <!-- Section: Social media -->
            <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
            >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Lépjen kapcsolatba velünk a közösségi média felületeinken is!</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Visitor Care
                    </h6>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ex aperiam eius maiores dolorem ipsa magnam error molestiae blanditiis unde ipsum natus voluptatem vitae, cumque quaerat harum dolorum dolor nemo?
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Oldalak
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Főoldal</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Rólunk</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Friss Hírek</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Kapcsolat</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Kapcsolat
                    </h6>
                    <p><i class="fas fa-home me-3"></i>IX. Budapest, Valami U. 123</p>
                    <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@visitorcare.hu
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 36 (30) 123 4567</p>
                    <p><i class="fas fa-print me-3"></i> + 36 (20) 765 4321</p>
                </div>
                <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(8, 8, 8, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="#">Developer team</a>
            </div>
            <!-- Copyright -->
        </footer>


    </div><!-- wrapper_main -->




    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() { $( "#ker_ido" ).datepicker(); } );
        </script>
    <!-- <script src="../../process/admin.js"></script> -->
    <script src="../process/g_apolo.js"></script>

</body>
