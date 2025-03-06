<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GenHive</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles-result.css') }}">
        <script src="{{ asset('js/scripts.js') }}" defer></script>
        <script src="{{ asset('js/upload.js') }}" defer></script>
    </head>

    <script src="{{ asset('js/audio-player.js') }}" defer></script>

    <script>
        function openYoutube(videoId) {
            let youtubeURL = `https://www.youtube.com/watch?v=${videoId}`;
            window.open(youtubeURL, "_blank");
        }
    </script>

    <body id="page-top" class="result-page">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <img class="navbar-img" src="/images/img/Logo GenHive Text.png" alt="GenHive Logo" />
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}#portfolio">Home</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded active" href="{{ url('/') }}#about">Feature</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/') }}#contact">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


        <!-- Kotak besar yang membungkus semua elemen -->
        <div class="result-container">
            <div class="main-content">
                <div class="title">
                    <img src="/images/img/The Genre of the Song is Already Known!.png" class='result-title'>
                </div>
                <p><span class="genre-detail"><strong>Song : </strong> {{ $song_name }}</p>
                <p><span class="genre-detail"><strong>Genre : </strong> {{ $predicted_genre }}</span></p>
                <!-- Pemutar Audio -->
                <div class="audio-player">
                    <!-- Elemen Audio (hidden) -->
                    <audio id="audioPlayer">
                        <source src="{{ asset('audio/dummy.mp3') }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                    <!-- Tombol Play/Pause -->
                    <button class="play-button">▶ Play</button>
                    <input type="range" id="progress-bar" value="0" min="0" max="100">
                    <span id="time-display">0:00</span>
                </div>
            </div>

            <!-- Rekomendasi Lagu -->
            <div class="recommendations">
                <h2 class="recommend-title">Recommended For You:</h2>
                <div class="recommend-box" id="recommend-list">
                    @foreach ($recommendations_kpop as $song)
                        <div class="recommend-item" onclick="openYoutube('{{ $song['videoId'] }}')">
                            <img src="/images/img/KPop-Song-Icon.jpg" class='song-img'>
                            <div class="song-info">
                                <p class="song-title"><strong>{{ $song['title'] }}</strong></p>
                                <p class="song-genre">{{ $song['artist'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Tombol Another Song -->
        <div class="button-container">
            <button class="another-song">Another Song</button>
        </div>
    </body>
    
        <footer class="footer">
            <div class="footer-left">&copy; 2024 GenHive. All Rights Reserved.</div>
            <div class="footer-right">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
