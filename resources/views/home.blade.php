<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GenHive</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" src="/images/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script src="{{ asset('js/scripts.js') }}" defer></script>
        <script src="{{ asset('js/upload.js') }}" defer></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <img class="navbar-img" src="/images/img/Logo GenHive Text.png" alt="..." />
                <!-- <a class="navbar-brand" href="#page-top">Start Bootstrap</a> -->
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Feature</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
        <div class="container">
                
                    <!-- Portfolio Grid Items-->
                    <div class="row justify-content-center">
                    <!-- isi di sini logonya -->
                    <div class="image-container">
                            <img src="/images/img/LogoGenHive.png">
                    </div>
                </div>

        </div>

        </section>
        <!-- About Section-->
        <section class="page-section upload-section bg-primary text-white mb-0" id="about">
            <div class="main-container">
                <!-- About Section Heading-->
                
                    <div class="title">
                        <img src="/images/img/Whatsthe Genre.png">
                    </div>

                <!-- Kotak utama -->
                    <div class="box">
                        <!-- Area untuk upload file -->
                        <div id="drop-area" class="upload-area">
                            <img src="/images/img/UploadIcon.png" class="upload-icon">
                            <div>Choose a file or drag it here</div>
                            <div>Supported formats: .mp3, .wav </div> 
                            <div class="upload-audio-btn-container">
                            <input type="file" id="file-input" accept=".mp3, .wav" hidden>
                            <p id="error-message" style="color: red; font-weight: bold;"></p>
                                <button class="upload-btn">Upload Audio</button>
                            </div>
                        </div>
                    </div>

                    <div class="container-but">
                        <button class="buton">Find The Genre</button>
                    </div>
                        

            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container-aboutUs">
                <!-- Contact Section Heading-->
                <div class="titleGenYel">
                        <img src="/images/img/GenhiveYel.png">
                </div>
                <div class="container-text">
                    <div> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page Maker including versions of Lorem Ipsum.</div>
                </div>
                
                <!-- developer-->
                <div class="titleDeveloper">
                        <img src="/images/img/Developer.png">
                </div>

                <div class="container-text">
                    <div>11LA - PPTI 17</div>
                        
                    <div>Baylee Theda - 2702363595</div>
                    <div>Daniela Vallerine Gunawan - 2702363361</div>
                    <div>Naufal Dimas Azizan - 2702363531</div>
                    <div>Olivio Leoartha - 2702363544</div>
                    <div>Wesley Aldrich - 2702363613</div>
                </div>
                
                <!-- E mail-->
                <div class="titleEmail">
                        <img src="/images/img/e-Mail.png">
                </div>
                
                <div class="container-text">
                    <div>officialgenhive.@gmail.com </div>
                </div>

            </div>
        </section>

        <div class="footer">
            <div class="footer-left">
                copyrights©2024 Reserved by GenHive
            </div>
            <div class="footer-right">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
