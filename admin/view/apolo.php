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
            <p id="menu1" class="menu">Magánklinikák</p>
            <p id="menu2" class="menu">Idősek otthona</p>
            <p id="menu3" class="menu aktiv">Ápolók</p>
            <p id="menu4" class="menu">Hírek</p>
            <p id="menu5" class="menu">Bannerek</p>
            <p id="menu7" class="menu">Új jelentkezők></p>
            <p id="menu6" class="menu">Home</p>
        </div>
        <div id="session">
            <h1 id="sess_cim">Ápolók oldal</h1>
            <p id="sess_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum distinctio quis quam minima nam autem dicta incidunt nisi perspiciatis tempora asperiores enim ipsa, assumenda, dignissimos facere neque est tenetur doloremque vero ducimus aliquid dolorem repellat explicabo? At reprehenderit earum autem voluptate ducimus neque, voluptatibus quam soluta laudantium recusandae similique officia voluptas tempora cupiditate minima omnis numquam ad nulla nemo! Dicta alias magni quam quod quis! Laborum animi omnis vitae quas quis facilis eligendi. Recusandae, iusto. Debitis enim a dignissimos nostrum asperiores saepe. A recusandae molestiae, libero explicabo inventore minus unde! Ratione neque necessitatibus nam, fugiat harum magnam deserunt esse quibusdam?</p>
            <div id="sess_torzs">
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
                            <input id="a_oradij" name="a_oradij" type="text" class="form-control" placeholder="pl: 8000" aria-label="o_oradij" aria-describedby="o_dij">
                        </div>
                        <div class="input-group flex-nowrap p-3">
                            <span class="input-group-text w-25">Beminősítés</span>
                            <input id="a_minosites" name="a_minosites" type="text" class="form-control" placeholder="pl: 3. kategória" aria-label="a_minosites" aria-describedby="a_minosites">
                        </div>
    
                        <button class="menu" type="submit">Rögzít</button>
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