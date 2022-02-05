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
<!--     <link rel="stylesheet" type="text/css" href="../../css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="g_klinika.css">


</head>
<body>
    <?php 
            session_start();
            if( !$_SESSION['nlogin']){
                echo "be kell lépni!";

            }else{
                echo $_SESSION['felh_name'];
            }
    ?>

    <div id="wrapper_main">
        <div id="header_vc">
            <div id="logodiv">
                <img src="../../images/svg/Visitor-Care-logo.svg" alt="visitor care logo fekete" class="img-responsive">
            </div>
            <div id="kontaktok" style="padding-top: 5px;">
                    <p>Ügyfélszolgálat:</p>
                    <p style="color: #E6426E">+36 (30) 123-4567</p>
                    <p class="elvalaszto" style="padding:0 5px 0 5px"><span>|</span></p>
                    <p>E-mail:</p>
                    <p style="color: #E6426E">info@visitorcare.eu</p>
            </div>
            <a href="../../index.php" id="gomb_kilep" class="menu" type="button">Kilépés</a>
        </div>

        <div id="wrapper">
            <div id="menu_oldal">
                <p id="menu1" class="menu aktiv">Magánklinikák</p>
                <p id="menu2" class="menu"><a href="../intezmeny/view/intezmeny.php">Intézmények</a></p>
                <p id="menu3" class="menu"><a href="../apolo/view/g_apolo.php">Ápolók</a></p>
                <p id="menu4" class="menu">Hírek</p>
                <p id="menu5" class="menu">Bannerek</p>
                <p id="menu7" class="menu"><a href="../view/jelentkezok.php"> Új jelentkezők</a></p>
                <p id="menu6" class="menu"><a href="../../index.php">Home</a></p>
            </div>
            <div id="session">
                <h1 id="sess_cim">Magánklinikák oldal</h1>
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
                                <th>Klinika neve</th>
                                <th>Irsz</th>
                                <th>Város</th>
                                <th>Utca</th>
                                <th>Hsz</th>
                                <th>Telefon</th>
                                <th>Mobil</th>
                                <th>E-mail</th>
                                <th>Weboldal</th>
                                <th>Logo</th>
                                <th>Rólunk</th>
                                <th>Térkép</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <form id="szekcio_1" method="POST" enctype="multipart/form-data">
                        <p id="klinika_id" class="hide"></p>
                        <img id="k_logo_kep" class="" src="">
    
                        <div id="k_logo_file">
                            <label for="k_logo">Klinika képe</label>
                            <input type="file" id="k_logo" name="k_logo" 
                              class="custom-file-input" ></input>
                        </div>
                        <div style="text-align: center;">
                            <script id="mNCC" language="javascript">
                                medianet_width = "728";
                                medianet_height = "90";
                                medianet_crid = "655540672";
                                medianet_versionId = "3111299"; 
                            </script>
                        </div>
                
                        <input type="text" name="klinika_nev" id="klinika_nev" placeholder="A klinika neve"></input>
                        <input type="text" name id="k_address_varos" placeholder="Település neve"></input>
                        <input type="text" name id="k_address_irsz" placeholder="Irányítószám"></input>
                        <input type="text" name id="k_address_utca" placeholder="Utca neve"></input>
                        <input type="text" name id="k_address_hsz" placeholder="Házszám"></input>
                        <p id="k_elerhetoseg_cim" class="label_klin">Elérhetőségek:</p>
                        <input id="k_phone" placeholder="vezetékes szám" placeholder="Vonalas telefon"></input>
                        <input id="k_mobil" placeholder="mobil szám"></input>
                        <input id="k_email" placeholder="E-mail"></input>
                        <input id="k_web" placeholder="pl.: www.klinika.hu"></input>
                        <p id="rolunk_cim" class="label_klin">Klinika leírása</p>
                        <input id="k_rolunk" class="card-text" placeholder="Klinika rövid ismertetése"></input>
                        <p id="geoframe_cim" class="label_klin">Geoframe adat</p>
                        <input id="geoframe" class="card-text" placeholder="google térkép megosztás frame-je"></input>
                        <a id="gomb_m" href="#" class="col-6 btn m-2">Módosítás</a>
                        <a id="gomb_c" href="#" class="col-6 btn m-2">Új Klinika</a>
                    </form>

                    <div id="urlap">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="szak_id">Szakrendelés</label>
                                </div>
                                <select class="custom-select" id="szak_id">
                                    <option value="0" selected>Válasszon szakrendelőt...</option>
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
                                    <label class="form-check-label" for="felnot">Felnőtt rendelés</label>
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
                                    <label class="form-check-label" for="online">On-line rendelés</label>
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

                    <div id="szekcio_2">
                        <div id="terkep_1"></div>
                    </div>
                </div> <!-- sess_torzs END -->
            </div>  <!-- Session END -->
        </div> <!-- Wraooer END -->

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

    </div> <!-- wrapper_main END-->

    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() { $( "#ker_ido" ).datepicker(); } );
        </script>
<!--     <script src="../process/admin.js"></script> -->
    <script src="../process/g_klinika.js"></script>

</body>
