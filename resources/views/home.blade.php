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

        <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
        <script src="{{ asset('js/loadingCard.js') }}" defer></script>
        <script src="{{ asset('js/loadingDots.js') }}" defer></script>
        <script src="{{ asset('js/progress.js') }}" defer></script>
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
            <form action="{{ route('result') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="main-container">
                    <div class="title">
                        <img src="/images/img/Whatsthe Genre.png">
                    </div>

                    <div class="box" id="pre-loading">
                        <div id="drop-area" class="upload-area">
                            <img src="/images/img/UploadIcon.png" class="upload-icon">
                            <div class="desc">Choose a file or drag it here</div>
                            <div class="desc">Supported formats: .mp3, .wav </div>
                            <div class="upload-audio-btn-container">
                                <input type="file" id="file-input" name="file" accept=".mp3, .wav" hidden>
                                <div class="upload-btn">Upload Audio</div>
                                <p id="message" style="font-weight: bold;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="container-but">
                        <button class="buton ErasDemiITC" onclick="showLoading(event)">Find The Genre</button>
                    </div>
                </div>
            </form>
        </section>

        <section class="page-section loading bg-primary text-white mb-0" id="loading" style="display: none;">
            <div class="main-container">
                <div class="title">
                    <img src="/images/img/Whatsthe Genre.png">
                </div>

                <div class="box" id="pre-loading">
                    <div id="drop-area" class="upload-area">
                        <div class="container_loading">
                            <div class="shuffle_card">
                                <img id="card1" src="/images/img/Card Modern Pop.png" alt="Card_ModernPop">
                                <img id="card2" src="/images/img/Card Trap.png" alt="Card_Trap">
                                <img id="card3" src="/images/img/Card J-Pop.png" alt="Card_J-Pop">
                                <img id="card4" src="/images/img/Card K-Pop.png" alt="Card_K-Pop">
                            </div>

                            <div class="loading-text ErasBoldITC">
                                <span class="text">Find the Genre</span>
                                <span class="dots"></span>
                            </div>

                            <div class="progress-container">
                                <div class="progress-bar" id="progress-bar"></div>
                            </div>

                            <div class="loading-percentage" id="loading-percentage">0%</div>
                        </div>
                    </div>
                </div>

                <div class="container-but">
                    <button class="buton ErasDemiITC" onclick="cancelLoading()">Cancel</button>
                </div>
            </div>
        </section>

        {{-- <section class="page-section loading" id="loading" style="display: none;">
            <div class="container">
                <div class="container_loading">
                    <div class="shuffle_card">
                        <img id="card1" src="/images/img/Card Modern Pop.png" alt="Card_ModernPop">
                        <img id="card2" src="/images/img/Card Trap.png" alt="Card_Trap">
                        <img id="card3" src="/images/img/Card J-Pop.png" alt="Card_J-Pop">
                        <img id="card4" src="/images/img/Card K-Pop.png" alt="Card_K-Pop">
                    </div>

                    <div class="loading-text ErasBoldITC">
                        <span class="text">Find the Genre</span>
                        <span class="dots"></span>
                    </div>
                </div>
            </div>

            <div class="container-but">
                <button class="buton ErasDemiITC" onclick="cancelLoading()">Cancel</button>
            </div>
        </section> --}}

        <section class="page-section" id="contact">
            <div class="container-aboutUs">
                <div class="titleGenYel">
                    <img class="title-img" src="/images/img/GenhiveYel.png">
                </div>
                <div class="container-text">
                    <div>
                        GenHive adalah platform inovatif yang dirancang untuk membantu pengguna mengidentifikasi genre musik dengan cepat dan akurat. Dengan teknologi kecerdasan buatan, GenHive mampu menganalisis lagu dan mengklasifikasikannya ke dalam berbagai genre populer, termasuk KPop, JPop, Rock, R&B, Rap/Hip-Hop, Pop, EDM, serta Alternative/Indie.
                    </div>
                </div>
                <div class="titleDeveloper">
                    <img class="title-img" src="/images/img/Developer.png">
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
