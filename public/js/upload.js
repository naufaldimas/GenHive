document.addEventListener("DOMContentLoaded", function () {
    const dropArea = document.getElementById("drop-area");
    const fileInput = document.getElementById("file-input");
    const errorMessage = document.getElementById("error-message");
    const anotherSongBtn = document.querySelector(".another-song");

    if (anotherSongBtn) {
        anotherSongBtn.addEventListener("click", function() {
            window.history.back();
        });
    }

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
            displayMessage(`File berhasil diunggah: ${file.name}`, true);
        } else {
            displayMessage("Format tidak valid! Hanya MP3 dan WAV yang diterima.", false);
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

    function displayMessage(text, isSuccess) {
        message.textContent = text;
        if (isSuccess) {
            message.classList.remove("message-error");
            message.classList.add("message-success");
        } else {
            message.classList.remove("message-success");
            message.classList.add("message-error");
        }
    }

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        dropArea.classList.remove("dragover"); // Hapus kelas setelah drop
        const file = event.dataTransfer.files[0];
        if (file && validateFile(file)) {
            displayMessage(`File berhasil diunggah: ${file.name}`, true);
        } else {
            displayMessage("Format tidak valid! Hanya MP3 dan WAV yang diterima.", false);
        }
    });
});

function showLoading(event) {
    document.getElementById("about").style.display = "none";
    document.getElementById("loading").style.display = "flex";
}

function cancelLoading() {
    document.getElementById("about").style.display = "block";
    document.getElementById("loading").style.display = "none";

    // refresh window
    location.reload();
}
