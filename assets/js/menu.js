const nav = document.getElementById("menuScrollNav");
const wrapper = document.getElementById("scrollNavWrapper");
const offsetTop = wrapper.offsetTop;

window.addEventListener("scroll", () => {
    if (window.scrollY >= offsetTop) {
        nav.classList.add("sticky");
    } else {
        nav.classList.remove("sticky");
    }
});