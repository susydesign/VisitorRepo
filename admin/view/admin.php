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
<!--     <link rel="stylesheet" type="text/css" href="../../css/style.css">
 -->
     <link rel="stylesheet" type="text/css" href="admin.css">

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
            <button id="gomb_kilep" class="menu" type="button">Kilépés</button>
        </div>

        <div id="wrapper">
            <div id="menu_oldal">
                <p id="menu1" class="menu"><a href="g_klinika.php">Magánklinikák</a></p>
                <p id="menu2" class="menu"><a href="../intezmeny/view/intezmeny.php">Intézmények</a></p>
                <p id="menu3" class="menu"><a href="../apolo/view/g_apolo.php">Ápolók</a></p>
                <p id="menu4" class="menu"><a href="hirek.php">Hírek</a></p>
                <p id="menu5" class="menu"><a href="banner.php">Bannerek</a></p>
                <p id="menu7" class="menu"><a href="../view/jelentkezok.php">Új jelentkezők</a></p>
                <p id="menu6" class="menu"><a href="../../index.php">Home</a></p>

            </div>
            <div id="session">
                <h1 id="sess_cim">Adminisztrációs oldal</h1>
                <p id="sess_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores labore aliquam et atque similique recusandae accusamus eius nemo iure quo consequatur neque, eos minus veniam, tempora deleniti nulla laudantium! Porro fugiat deserunt quod voluptate! Dolore iste sunt, ea assumenda, nihil officia quis voluptates magnam eos animi quidem architecto vero, mollitia voluptatibus porro libero non blanditiis harum praesentium sapiente ad autem accusamus. Accusantium dolore corporis non amet culpa animi natus pariatur magnam corrupti cupiditate repudiandae autem ipsam hic, iste aspernatur architecto nostrum tempora eveniet eos quos, reiciendis doloremque praesentium! Laudantium pariatur, minima natus laboriosam inventore recusandae a quae architecto impedit quam.</p>
                <div id="sess_torzs"></div>
            </div>
        </div>

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
        
    </div> <!-- wrapper_main -->


    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() { $( "#ker_ido" ).datepicker(); } );
        </script>
</body>
