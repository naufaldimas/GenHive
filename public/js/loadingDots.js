const dotsElement = document.querySelector('.dots');
let dotCount = 0;

setInterval(() => {
    dotCount = (dotCount + 1) % 4; // Siklus 0, 1, 2, 3
    dotsElement.textContent = '.'.repeat(dotCount); // Tambahkan titik-titik
}, 350); // Interval 500ms
