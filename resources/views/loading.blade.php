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

        <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <script src="{{ asset('js/scripts.js') }}" defer></script>
        <script src="{{ asset('js/loadingCard.js') }}" defer></script>
        <script src="{{ asset('js/loadingDots.js') }}" defer></script>
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Feature</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section loading" id="loading">
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
                <button class="buton ErasDemiITC">Cancel</button>
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
