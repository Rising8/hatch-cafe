window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    const header = document.querySelector('.animated-header');

    setTimeout(() => {
        preloader.style.opacity = "0";
        preloader.style.pointerEvents = "none";

        setTimeout(() => {
            preloader.style.display = "none";
            header.classList.add('start');
        }, 300);
    }, 1000);
});