import Trix from "trix";

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    autoplay: {
        delay: 5000,
    },
});

document.addEventListener("trix-before-initialize", () => {});

const upload = document.querySelector(".upload");

const showUpload = document.querySelector(".show-upload");
const closeModal = document.querySelector(".close-modal");

showUpload.addEventListener("click", function () {
    upload.classList.remove("hidden");
});

closeModal.addEventListener("click", function () {
    upload.classList.add("hidden");
});
