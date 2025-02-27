<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GenHive</title>
        <link rel="icon" type="image/x-icon" src="/images/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script src="{{ asset('js/scripts.js') }}" defer></script>
        <script src="{{ asset('js/upload.js') }}" defer></script>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <img class="navbar-img" src="/images/img/Logo GenHive Text.png" alt="..." />
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}#portfolio">Home</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}#about">Feature</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}#contact">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="image-container">
                        <img src="/images/img/LogoGenHive.png">
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section upload-section bg-primary text-white mb-0" id="about">
            <div class="main-container">
                <div class="title">
                    <img src="/images/img/Whatsthe Genre.png">
                </div>
                <div class="box">
                    <div id="drop-area" class="upload-area">
                        <img src="/images/img/UploadIcon.png" class="upload-icon">
                        <div>Choose a file or drag it here</div>
                        <div>Supported formats: .mp3, .wav </div>
                        <div class="upload-audio-btn-container">
                            <form action="{{ route('result') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="buton">Find The Genre</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="page-section" id="contact">
            <div class="container-aboutUs">
                <div class="titleGenYel">
                    <img src="/images/img/GenhiveYel.png">
                </div>
                <div class="container-text">
                    <div> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Page Maker including versions of Lorem Ipsum.</div>
                </div>
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
