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
    <link rel="shortcut icon" type="image/png" href="../images/svg/Visitor-Care-logo.svg" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/belepes.css">
    <link rel="stylesheet" type="text/css" href="../css/regisztracio.css">

</head>
<body>
    <div id="header_vc" class="container-fluid">
       <div id="header_1sor" class="row align-items-center">
            <div class="col-1 col-md-1 d-none d-md-block"></div>
            <div class="col-12 col-md-10" style="padding-top:10px;padding-bottom:10px">
                <div class="row">
                    <div id="logodiv" class="col-3 d-flex justify-content-start col-md-4">
                        <img src="../images/svg/Visitor-Care-logo.svg" alt="visitor care logo fekete" class="img-responsive">
                    </div>
                    <div id="kontaktok" class="col-9 d-flex justify-content-end col-md-5 " style="padding-top: 5px;">
                            <p class="eltunik" style="color: #4a4a4a;">Ügyfélszolgálat:</p>
                            <p style="padding-right:5px">+36 (30) 123-4567</p>
                            <p class="elvalaszto"><span>|</span></p>
                            <p class="eltunik" style="color: #4a4a4a;">E-mail:</p>
                            <p>info@visitorcare.eu</p>
                    </div>
                    <div id="gombok" class="col-12 d-flex justify-content-end col-md-3 gap-2 px-auto">
                        <a id="gomb_vissza" href="../index.php" class="btn" role=button Style="width:200px">Vissza</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <p id="info_userId"></p>
                        <p id="info_userNev"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <h1>Új Magánklinika Regisztrációja</h1>
            </div>
            <div class="col-1 col-md-1 d-none d-md-block"></div>
        </div>
    </div>

    <div id="navigacio" class="container-fluid">
        <div class="row">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="d-none d-md-block col-md-8 d-flex justify-content-start ">
                        <p>Regisztrált szakemberek az oldalon: <span>1.234 db</span></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex justify-content-end">
                        <nav class="nav">
                            <a class="nav-link active" href="">Főoldal</a>
                            <a class="nav-link" href="#">Rólunk</a>
                            <a class="nav-link" href="#">Friss hírek</a>
                            <a class="nav-link" href="#">Kapcsolat</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-1 d-sm-none d-md-block"></div>
        </div>
    </div>
    
    <div id="vonal" class="container">
        <div class="row">
            <div class="col-4"><hr style="border: 2px solid #E6426E;"></div>
            <div class="col-8"><hr style="border: 1px solid #707070";></div>
        </div>
    </div>

    <div id="k_form" class="contanier">
        <div class="row d-flex justify-content-center">
            <form class="row g-3">
                <div class="col-12">
                    <label for="inp_klinika_nev" class="form-label">Klinika neve</label>
                    <input type="text" class="form-control" id="inp_klinika_nev" name="inp_klinika_nev">
                </div>
    
                <div class="col-4">
                    <label for="inp_k_address_orszag" class="form-label">Ország</label>
                    <input type="text" class="form-control" id="inp_k_address_orszag" name="inp_k_address_orszag">
                </div>
                <div class="col-2">
                    <label for="inp_k_address_irsz" class="form-label">Irányítószám</label>
                    <input type="text" class="form-control" id="inp_k_address_irsz" name="inp_k_address_irsz">
                </div>
                <div class="col-6">
                    <label for="inp_k_address_varos" class="form-label">Város</label>
                    <input type="text" class="form-control" id="inp_k_address_varos" name="inp_k_address_varos">
                </div>
    
                <div class="col-8">
                    <label for="inp_k_address_utca" class="form-label">Utca</label>
                    <input type="text" class="form-control" id="inp_k_address_utca" name="inp_k_address_utca">
                </div>
                <div class="col-4">
                    <label for="inp_k_address_hsz" class="form-label">Házszám</label>
                    <input type="text" class="form-control" id="inp_k_address_hsz" name="inp_k_address_hsz">
                </div>
    
                <div class="col-6">
                    <label for="inp_k_phone" class="form-label">Telefon</label>
                    <input type="text" class="form-control" id="inp_k_phone" name="inp_k_phone">
                </div>
                <div class="col-6">
                    <label for="inp_k_mobil" class="form-label">Mobil</label>
                    <input type="text" class="form-control" id="inp_k_mobil" name="inp_k_mobil">
                </div>
    
                <div class="col-6">
                    <label for="inp_k_web" class="form-label">Webhely</label>
                    <input type="text" class="form-control" id="inp_k_web" name="inp_k_web">
                </div>
                <div class="col-6">
                    <label for="inp_k_logo" class="form-label">logo</label>
                    <input type="text" class="form-control" id="inp_k_logo" name="inp_k_logo">
                </div>
                <div class="col-12">
                    <label for="inp_k_rolunk" class="form-label">Rövid ismertető</label>
                    <input type="text" class="form-control" id="inp_k_rolunk" name="inp_k_rolunk">
                </div>
                <div class="col-12">
                    <label for="inp_geoframe" class="form-label">Google map frame</label>
                    <input type="text" class="form-control" id="inp_geoframe" name="inp_geoframe">
                </div>
    
                <div class="col-12" id="gomb_k_mentes">
                    <button type="submit" class="btn btn-primary">Mentés</button>
                </div>            
    
            </form>
        </div>
    </div>


    <div id="footer_vc" class="container-fluid">

        <!-- Footer -->
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
        <!-- Footer VÉGE -->








    </div>




    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    <script src="../js/regisztracio.js"></script>
    <script src="../js/service.js"></script>
</body>
</html>