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
        <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
        <script src="{{ asset('js/loading.js') }}" defer></script>
    </head>

    <body>
        <div class="container">
            <div class="shuffle_card">
                <img id="card1" src="/images/img/Card Modern Pop.png" alt="Card_ModernPop">
                <img id="card2" src="/images/img/Card Trap.png" alt="Card_Trap">
                <img id="card3" src="/images/img/Card J-Pop.png" alt="Card_J-Pop">
                <img id="card4" src="/images/img/Card K-Pop.png" alt="Card_K-Pop">
            </div>

            <div class="loading-text">
                <span class="text">Find the Genre</span>
                <span class="dots"></span></div>
        </div>
        <script src="loading.js"></script>
    </body>
</html>
