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
    <link rel="shortcut icon" type="image/png" href="./view/images/svg/Visitor-Care-logo.svg" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./view/css/style.css">
    <link rel="stylesheet" type="text/css" href="./view/css/belepes.css">

</head>
<body>
    <div id="header_vc" class="container-fluid">
       <div id="header_1sor" class="row align-items-center">
            <div class="col-1 col-md-1 d-none d-md-block"></div>
            <div class="col-12 col-md-10" style="padding-top:10px;padding-bottom:10px">
                <div class="row">
                    <div id="logodiv" class="col-3 d-flex justify-content-start col-md-4">
                        <img src="../view/images/svg/Visitor-Care-logo.svg" alt="visitor care logo fekete" class="img-responsive">
                    </div>
                    <div id="kontaktok" class="col-9 d-flex justify-content-end col-md-5 " style="padding-top: 5px;">
                            <p class="eltunik" style="color: #4a4a4a;">Ügyfélszolgálat:</p>
                            <p style="padding-right:5px">+36 (30) 123-4567</p>
                            <p class="elvalaszto"><span>|</span></p>
                            <p class="eltunik" style="color: #4a4a4a;">E-mail:</p>
                            <p>info@visitorcare.eu</p>
                    </div>
                    <div id="gombok" class="col-12 d-flex justify-content-end col-md-3 gap-2 px-auto">
                        <button id="gomb_reg" class="btn" type="button" style="width: 100px;">Regisztráció</button>
                        <button id="gomb_log" class="btn" type="button" data-bs-toggle="modal" data-bs-target="#myModalLog" style="width: 100px; margin-right: 15px;">Belépés</button>
                        <button id="gomb_kilep" class="btn" type="button" style="width: 100px; margin-right: 15px;">Kilépés</button>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <p id="info_userId"></p>
                        <p id="info_userNev"></p>
                    </div>
                </div>
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

    <div id="hirek-fej" class="container">
        <div class="row">
            <div class="col-12" style="text-align: center;">
                <h1>Legfrissebb Hírek</h1>
            </div>
            <div class="col-1 justify-content-end">
                <botton class="btn"></botton>
                <botton class="btn">></botton>
            </div>
        </div>
    </div>
                
    <div id="hirek-slide" class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                            <img src="./view/images/labor.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adott hír címe</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, doloribus harum ut facilis nobis, debitis molestiae porro, molestias aspernatur cumque id recusandae quia sint. Voluptatum dolorum temporibus quo quibusdam excepturi.</p>
                                <a href="#" class="btn">Elolvasom</a>
                            </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                            <img src="./view/images/gyogyszer.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adott hír címe</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, doloribus harum ut facilis nobis, debitis molestiae porro, molestias aspernatur cumque id recusandae quia sint. Voluptatum dolorum temporibus quo quibusdam excepturi.</p>
                                <a href="#" class="btn">Elolvasom</a>
                            </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                            <img src="./view/images/maszk.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adott hír címe</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, doloribus harum ut facilis nobis, debitis molestiae porro, molestias aspernatur cumque id recusandae quia sint. Voluptatum dolorum temporibus quo quibusdam excepturi.</p>
                                <a href="#" class="btn">Elolvasom</a>
                            </div>
                </div>
            </div>
 
            <div class="col-sm-3"> 
                <div class="card">
                            <img src="./view/images/fogaszat.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Adott hír címe</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, doloribus harum ut facilis nobis, debitis molestiae porro, molestias aspernatur cumque id recusandae quia sint. Voluptatum dolorum temporibus quo quibusdam excepturi.</p>
                                <a href="#" class="btn">Elolvasom</a>
                            </div>
                </div>
            </div>
        </div>
    </div>        
    
    <div id="valaszdki" class="container-fluid">
        <div class="row">
            <div class="col-md-12 justify-content-md-center">
                <h1>Válaszd ki, kit keresel!</h1>
            </div>           
        </div>
        <div class="row justify-content-md-center p-3">
            <div class="col col-lg-3 valaszt">
                <h3>Magánpraxist keresek</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquam itaque soluta asperiores beatae dolores ducimus tempora autem, libero et harum consequatur perferendis, rerum eveniet maxime nobis nostrum iste necessitatibus?</p>
            </div>
            <div class="col-md-auto"></div>
            <div class="col col-lg-3 valaszt">
                <h3>Ápolót/Ápolónőt keresek</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aliquam itaque soluta asperiores beatae dolores ducimus tempora autem, libero et harum consequatur perferendis, rerum eveniet maxime nobis nostrum iste necessitatibus?</p>
            </div>
        </div>
    </div>

    <div id="hogyan" class="container">
        <div class="row">
            <div class="col-12 m-5">
                <h1 style="text-align: center;">Hogyan működik a Visitor Care?</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3">
                <div class="card text-center justify-content-center" >
                    <div class="justify-content-center">
                        <img class="card-img-top svgimg" src="./view/images/svg/user.svg">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Keress magánpraxisokat vagy szakképzett ápolókat!</h5>
                        <div class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nihil architecto sunt eligendi a aspernatur eos numquam. </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card text-center">
                     <div class="justify-content-center">
                         <img class="card-img-top svgimg" src="./view/images/svg/calendar.svg">
                     </div>
                    <div class="card-body">
                        <h5 class="card-title">Keress magánpraxisokat vagy szakképzett ápolókat!</h5>
                        <div class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nihil architecto sunt eligendi a aspernatur eos numquam.</div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card text-center">
                    <div class="justify-content-center">
                        <img class="card-img-top svgimg" src="./view/images/svg/checked.svg">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Keress magánpraxisokat vagy szakképzett ápolókat!</h5>
                        <div class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nihil architecto sunt eligendi a aspernatur eos numquam.</div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="bestszakik" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <div style="text-align: center;">
                    <h1 class="p-2" style="color: #E6426E">Legnépszerűbb szakemberek</h1>
                    <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tenetur ipsam quo consequatur, blanditiis delectus. Omnis sequi et veritatis voluptatibus beatae ipsum molestias, quae ipsam quisquam aliquam rerum ab in.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-2" >
                <div class="card card-best">
                    <div class="row">
                        <div class="col-6">
                            <img class="" src="./view/images/drnosz.jpeg">
                        </div>
                        <div id="ertekel" class="col-6 justify-content-end">
                            <p>Onnkológus</p>
                            <p>*****</p>
                            <p>145 vélemény alapján</p>
                       </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dr. Varga Márta</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur corporis consectet</p>
                    </div>
                    <a href="#" class="col-6 btn m-2">Megnézem</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <div class="card card-best">
                    <div class="row">
                        <div class="col-6">
                            <img class="rounded-circle" src="./view/images/drno.jpeg">
                        </div>
                        <div id="ertekel" class="col-6 justify-content-end">
                            <p>Onnkológus</p>
                            <p>*****</p>
                            <p>145 vélemény alapján</p>
                       </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dr. Varga Mária</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur corporis consectet</p>
                    </div>
                    <a href="#" class="col-6 btn m-2">Megnézem</a>
                </div>

            </div>
            <div class="col-sm-12 col-md-2">
                <div class="card card-best">
                    <div class="row">
                        <div class="col-6">
                            <img class="rounded-circle" src="./view/images/dr.jpeg">
                        </div>
                        <div id="ertekel" class="col-6 justify-content-end">
                            <p>Fogorvos</p>
                            <p>*****</p>
                            <p>145 vélemény alapján</p>
                       </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dr. Varga Márton</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur corporis consectet</p>
                    </div>
                    <a href="#" class="col-6 btn m-2">Megnézem</a>
                </div>

            </div>
            <div class="col-sm-12 col-md-2">
                <div class="card card-best">
                    <div class="row">
                        <div class="col-6">
                            <img class="rounded-circle" src="./view/images/szisztens.jpeg">
                        </div>
                        <div id="ertekel" class="col-6 justify-content-end">
                            <p>Ápoló</p>
                            <p>*****</p>
                            <p>145 vélemény alapján</p>
                       </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dr. Varga Melinda</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur corporis consectet</p>
                    </div>
                    <a href="#" class="col-6 btn m-2">Megnézem</a>
                </div>

            </div>
            <div class="col-sm-12 col-md-2">
                <div class="card card-best">
                    <div class="row">
                        <div class="col-6">
                            <img class="rounded-circle" src="./view/images/drba.jpeg">
                        </div>
                        <div id="ertekel" class="col-6 justify-content-end">
                            <p>Belgyógyász</p>
                            <p>*****</p>
                            <p>145 vélemény alapján</p>
                       </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dr. Varga Marcel</h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur corporis consectet</p>
                    </div>
                    <a href="#" class="col-6 btn m-2">Megnézem</a>
                </div>

            </div>
                        
        </div>

    </div>

    <div id="pinks" class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 m-4" style="text-align: center;" >
                <h1>Pink kockák</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3">
                <div class="card card-best" style="width: 18rem; background-color: #E6426E; height: 250px;">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card card-best" style="width: 18rem; background-color: #E6426E; height: 250px;">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card card-best" style="width: 18rem; background-color: #E6426E; height: 250px;">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card card-best" style="width: 18rem; background-color: #E6426E; height: 250px;">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>



        </div>
    </div>

    <div id="prartnerink" class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 m-4" style="text-align: center;" >
                <h1>Partnereink</h1>
            </div>
        </div>
        <div class="row justify-content-center">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./view/images/svg/partners.svg" class="d-block slide-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
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





<!-- Modal belépés -->
  <div class="modal fade" id="myModalLog" tabindex="-1" aria-labelledby="myModalLogLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content container" id="beregModal-content">

        <div class="row">

          <div class="col-md-5 justify-content-center" id="beregModal-content-bal">
            <img src="./view/images/svg/Visitor-Care-logo.svg" alt="VisitorCareLogo" class="text-center">
            <p class="text-center p-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptas impedit doloremque optio quidem, voluptatem atque et incidunt consequuntur.</p>

            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>                 
            </ul>

          </div>
    
          <div class="col-md-7" id="beregModal-content-jobb">
            
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLogLabel">Belépés</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              
            <div class="modal-body">
              <!-- Bejelentkezés form-->
              <div class="col-12" style="margin-bottom: 10px;">
                  <input type="text" class="form-control" id="felh_nev" name="felh_nev" placeholder="Felhasználónév" aria-label="felh_nev" required autofocus>
              </div>
              <div class="col-12">
                <input type="password" class="form-control" id="jelszo" name="jelszo" placeholder="Jelszó" aria-label="password name" required autofocus>
              </div>
            </div>
              
            <div class="modal-footer">
              <button id="modal_btnlog" type="button" class="btn btn-primary">Belépés</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezár</button>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>
  <!-- Belépés VÉGE -->
    



    <!-- Scriptek -->  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="./js/belepes.js"></script>
</body>
</html>