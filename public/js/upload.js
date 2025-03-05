document.addEventListener("DOMContentLoaded", function () {
    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("file-input");
    const errorMessage = document.getElementById("error-message");

    function validateFile(file) {
        const validExtensions = ["audio/mpeg", "audio/wav"]; // MP3 & WAV
        return validExtensions.includes(file.type);
    }

    // Klik area upload untuk memilih file
    dropArea.addEventListener("click", () => fileInput.click());

    // Input file dari form
    fileInput.addEventListener("change", function () {
        const file = this.files[0];
        if (file && validateFile(file)) {
            errorMessage.textContent = "";
            alert("File berhasil diunggah: " + file.name);
        } else {
            errorMessage.textContent = "Format tidak valid! Hanya MP3 dan WAV yang diterima.";
            fileInput.value = ""; // Reset input
        }
    });

    // Drag & Drop Events
    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("dragover"); // Tambahkan kelas
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("dragover"); // Hapus kelas
    });

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        dropArea.classList.remove("dragover"); // Hapus kelas setelah drop
        const file = event.dataTransfer.files[0];
        if (file && validateFile(file)) {
            errorMessage.textContent = "";
            alert("File berhasil diunggah: " + file.name);
        } else {
            errorMessage.textContent = "Format tidak valid! Hanya MP3 dan WAV yang diterima.";
        }
    });
});
