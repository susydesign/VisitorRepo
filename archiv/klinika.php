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
    <link rel="stylesheet" type="text/css" href="klinika.css">


</head>
<body>
    <div id="header_vc" class="container-fluid">
       <div id="header_1sor" class="row align-items-center">
            <div class="col-1 col-md-1 d-none d-md-block"></div>
            <div class="col-12 col-md-10" style="padding-top:10px;padding-bottom:10px">
                <div class="row">
                    <div id="logodiv" class="col-3 d-flex justify-content-start col-md-4">
                        <img src="../../images/svg/Visitor-Care-logo.svg" alt="visitor care logo fekete" class="img-responsive">
                    </div>
                    <div id="kontaktok" class="col-9 d-flex justify-content-end col-md-5 " style="padding-top: 5px;">
                            <p class="eltunik" style="color: #4a4a4a;">Ügyfélszolgálat:</p>
                            <p style="padding-right:5px">+36 (30) 123-4567</p>
                            <p class="elvalaszto"><span>|</span></p>
                            <p class="eltunik" style="color: #4a4a4a;">E-mail:</p>
                            <p>info@visitorcare.eu</p>
                    </div>
                    <div id="gombok" class="col-12 d-flex justify-content-end col-md-3 gap-2 px-auto">
                        <button id="gomb_kilep" class="btn" type="button" style="width: 100px; margin-right: 15px;">Kilépés</button>

                    </div>
                </div>
            </div>
            <div class="col-1 col-md-1 d-none d-md-block"></div>
        </div>
    </div>
    <div id="wrapper">
        <div id="menu_oldal">
            <p id="menu1" class="menu aktiv">Magánklinikák</p>
            <p id="menu2" class="menu">Intézmények</p>
            <p id="menu3" class="menu">Ápolók</p>
            <p id="menu4" class="menu">Hírek</p>
            <p id="menu5" class="menu">Bannerek</p>
            <p id="menu7" class="menu">Új jelentkezők</p>
            <p id="menu6" class="menu">Home</p>
        </div>
        <div id="session">
            <h1 id="sess_cim">Magánklinika</h1>
            <p id="sess_desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati perferendis qui vero, officiis sapiente laboriosam, commodi temporibus provident animi nulla omnis eius aperiam? Maxime facilis officia accusantium quas voluptas officiis laboriosam asperiores ea. Ipsa in minima impedit ut nostrum obcaecati quam et autem illo aut voluptatum dignissimos iure repudiandae, eveniet maxime, deleniti necessitatibus quia eius asperiores labore ullam consectetur quasi similique. Blanditiis voluptas repellendus fuga eaque mollitia, neque sapiente commodi iure numquam provident sit recusandae? Exercitationem voluptatum, rem laborum nobis delectus sapiente cumque assumenda, doloribus optio debitis pariatur architecto quas eligendi ullam minima voluptatem excepturi itaque porro inventore maiores magnam?</p>
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
                            </tr>
                        </thead>
                    </table>
                </div>

                <div id=urlap>
                    <form>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Klinika neve</span>
                            <input id="klinika_nev" type="text" class="form-control" placeholder="Pl.: Szent Rókus Egészszégügyi Klinika" aria-label="klinika_nev" aria-describedby="klinika_nev">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Irányítószám</span>
                            <input id="k_address_irsz" type="text" class="form-control" placeholder="pl: 9876" aria-label="k_address_irsz" aria-describedby="k_address_irsz">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Város</span>
                            <input id="k_address_varos" type="text" class="form-control" placeholder="pl: Szombathely" aria-label="k_address_varos" aria-describedby="k_address_varos">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Utca</span>
                            <input id="k_address_utca" type="text" class="form-control" placeholder="pl.: Ady Endre utca" aria-label="k_address_utca" aria-describedby="k_address_utca">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Házszám</span>
                            <input id="k_address_hsz" type="text" class="form-control" placeholder="pl.: 10" aria-label="k_address_hsz" aria-describedby="k_address_hsz">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Telefonszám</span>
                            <input id="k_phone" type="text" class="form-control" placeholder="pl.: +36 (1) 1234567" aria-label="k_phone" aria-describedby="k_phone">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Mobil</span>
                            <input id="k_mobil" type="text" class="form-control" placeholder="pl.: +36 (30) 1234567" aria-label="k_mobil" aria-describedby="k_mobil">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">E-mail cím</span>
                            <input id="k_email" type="text" class="form-control" placeholder="pl.: info@rokusklinik.hu" aria-label="k_email" aria-describedby="k_email">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Weboldal címe</span>
                            <input id="k_web" type="text" class="form-control" placeholder="pl.: www.rokusklinik.hu" aria-label="k_web" aria-describedby="k_web">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Intézmény logója</span>
                            <input id="k_logo" type="text" class="form-control" placeholder="pl.: rokuslogo.jpg" aria-label="k_logo" aria-describedby="k_logo">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Rólunk</span>
                            <input id="k_rolunk" type="text" class="form-control" placeholder="Intézmény pársoros ismertetése" aria-label="k_rolunk" aria-describedby="k_rolunk">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Intézmény geokoordinátája</span>
                            <input id="geoframe" type="text" class="form-control" placeholder="Google maps frame import" aria-label="geoframe" aria-describedby="geoframe">
                        </div>
                        <button id="btn_bekuld" class="menu" type="submit">Rögzít</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() { $( "#ker_ido" ).datepicker(); } );
        </script>
    <script src="../process/admin.js"></script>
    <script src="../process/klinika_cr.js"></script>
</body>
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