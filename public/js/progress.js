document.addEventListener("DOMContentLoaded", function () {
    let progressBar = document.getElementById("progress-bar");
    let percentageText = document.getElementById("loading-percentage");
    let progress = 0;

    function updateProgress() {
        if (progress < 100) {
            progress += Math.floor(Math.random() * 10) + 5;
            if (progress > 100) progress = 100;
            progressBar.style.width = progress + "%";
            percentageText.textContent = progress + "%";

            // Set background gradient color from white to yellow
            progressBar.style.background = `linear-gradient(to right, #F4BC43, #F4BC43 ${progress}%)`;

            setTimeout(updateProgress, 100);
        }
    }
    updateProgress();
});
