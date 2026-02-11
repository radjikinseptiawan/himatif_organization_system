window.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menuBtn");
    const sliders = document.getElementById("sliders");
    const closeBtn = document.getElementById("closeMenu");
    const overlay = document.getElementById("overlay");

    menuBtn.addEventListener("click", () => {
        sliders.classList.remove("translate-x-full");
        sliders.classList.add("translate-x-0");
        overlay.classList.remove("hidden");
    });

    function closeMenu() {
        sliders.classList.remove("translate-x-0");
        sliders.classList.add("translate-x-full");

        setTimeout(() => {
            overlay.classList.add("hidden");
        }, 300); 
    }

    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);
});
