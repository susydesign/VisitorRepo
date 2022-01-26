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
    <link rel="shortcut icon" type="image/png" href="./images/svg/Visitor-Care-logo.svg" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" type="text/css" href="../../css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="jelentkezok.css">


</head>
<body>
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
                    <p id="menu1" class="menu"><a href="../view/g_klinika.php">Magánklinikák</a></p>
                    <p id="menu2" class="menu"><a href="../intezmeny/view/intezmeny.php">Intézmények</a></p>
                    <p id="menu3" class="menu"><a href="../apolo/view/g_apolo.php">Ápolók</a></p>
                    <p id="menu4" class="menu">Hírek</p>
                    <p id="menu5" class="menu">Bannerek</p>
                    <a id="menu7" class="menu aktiv" href="../view/jelentkezok.php">Új jelentkezők</a>
                    <p id="menu6" class="menu"><a href="../../index.php">Home</a></p>
                </div>
                <div id="session">
                    <h1 id="sess_cim">Jelentkezők</h1>
                    <p id="sess_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi numquam, temporibus praesentium recusandae porro quas tempora odio, doloribus cupiditate, libero obcaecati beatae dolore consequuntur velit atque magnam nobis esse debitis voluptates! Libero ducimus voluptas vel excepturi eligendi perspiciatis optio ipsam delectus, rem rerum, dicta nesciunt nemo labore quaerat dolorum corrupti officia molestiae dolor fugiat laborum. Perferendis vitae voluptatum ipsam debitis blanditiis ad, excepturi omnis, tenetur, commodi voluptas consequatur? Nulla, esse numquam voluptas doloribus repellendus dolor eaque praesentium, consequuntur architecto inventore doloremque. Harum, exercitationem quasi. Vel consequatur amet, nostrum dolorum, architecto alias dolorem saepe ipsa dignissimos a rerum sint! Numquam, accusantium!</p>

                    
                    <div id="sess_torzs">
                        <div id="gombok">
                            <p id="o_db" class="menu">Intézmény jelentkezők</p>
                            <p id="a_db" class="menu">Ápoló jelentkezők</p>
                        </div>

                        <div id="showData_div" class="hide">

                            <table id="showData_int" 
                                class=" hide table table-bordered 
                                        table-condensed table-striped">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>név</th>
                                    <th>irsz</th>
                                    <th>város</th>
                                    <th>utca</th>
                                    <th>telefon</th>
                                    <th>email</th>
                                    <th>kapcsolat tartó</th>
                                    <th>status</th>
                                    </tr>
                                </thead>
                            </table>

                            <table id="showData_apolo" 
                                class=" hide table table-bordered 
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

                        <div id="ok_card">
                            <input id="o_nev" class="form-control"></input>
                            <p id="o_id"></p>
                            <input id="o_irsz" class="form-control"></input>
                            <input id="o_varos" class="form-control"></input>
                            <input id="o_utca" class="form-control"></input>
                            <input id="o_telefon" class="form-control"></input>
                            <input id="o_email" class="form-control"></input>
                            <input id="o_kapcs" class="form-control"></input>
                            <p id="o_status"></p>
                            <p id="btn_rog" class="menu">Aktivál</p>
                            <p id="btn_del" class="menu">Töröl</p>
                        </div>

                        <div id="apolo_card" class="hide">
                            <input id="a_nev" class="form-control"></input>
                            <p id="a_jel_id"></p>
                            <input id="a_fenykep" class="form-control"></input>
                            <input id="a_szul" class="form-control"></input>
                            <input id="a_irsz" class="form-control"></input>
                            <input id="a_varos" class="form-control"></input>
                            <input id="a_utca" class="form-control"></input>
                            <input id="a_hsz" class="form-control"></input>
                            <input id="a_telefon" class="form-control"></input>
                            <input id="a_email" class="form-control"></input>
                            <input id="a_v_megnev" class="form-control"></input>
                            <input id="a_v_ido" class="form-control"></input>
                            <input id="a_v_doksi" class="form-control"></input>
                            <input id="a_oradij" class="form-control"></input>
                            <input id="a_minosites" class="form-control"></input>
                            <p id="a_status"></p>
                            <p id="btn_a_rog" class="menu">Aktivál</p>
                            <p id="btn_a_del" class="menu">Töröl</p>
                        </div>



                    </div>
                </div>
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

        </div><!-- wrapper_main END -->

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
    <script src="../process/load_jelent.js"></script>
</body>
