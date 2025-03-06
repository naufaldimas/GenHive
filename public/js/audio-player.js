document.addEventListener("DOMContentLoaded", function () {
    const audio = document.getElementById("audioPlayer");
    const playButton = document.querySelector(".play-button");
    const progressBar = document.getElementById("progress-bar");
    const timeDisplay = document.getElementById("time-display");

    // Fungsi untuk memutar atau menghentikan lagu
    playButton.addEventListener("click", function () {
        if (audio.paused) {
            audio.play();
            playButton.textContent = "⏸ Pause";
        } else {
            audio.pause();
            playButton.textContent = "▶ Play Song";
        }
    });

    // Update progress bar dan waktu saat lagu diputar
    audio.addEventListener("timeupdate", function () {
        // Perbarui progress bar
        const progress = (audio.currentTime / audio.duration) * 100;
        progressBar.value = progress;

        progressBar.style.background = `linear-gradient(to right, #F4BC43 ${progress}%, rgb(255, 226, 119) ${progress}%)`;

        // Perbarui tampilan waktu
        let minutes = Math.floor(audio.currentTime / 60);
        let seconds = Math.floor(audio.currentTime % 60);
        if (seconds < 10) seconds = "0" + seconds;
        timeDisplay.textContent = `${minutes}:${seconds}`;
    });

    // Jika pengguna mengubah progress bar, ubah posisi audio
    progressBar.addEventListener("input", function () {
        const seekTime = (progressBar.value / 100) * audio.duration;
        audio.currentTime = seekTime;

        progressBar.style.background = `linear-gradient(to right, #F4BC43 ${progress}%,rgb(255, 226, 119) ${progress}%)`;
    });

    // Reset tombol ketika lagu selesai
    audio.addEventListener("ended", function () {
        playButton.textContent = "▶ Play Song";
        progressBar.value = 0;
        progressBar.style.background = `linear-gradient(to right, #F4BC43 ${progress}%, rgb(255, 226, 119)  ${progress}%)`;
        timeDisplay.textContent = "0:00";
    });
});
