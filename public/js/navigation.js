
window.addEventListener("DOMContentLoaded",()=>{
    const menuBtn = document.getElementById("menuBtn");
    const sliders = document.getElementById("sliders");
    const closeBtn = document.getElementById("closeMenu");
 
    menuBtn.addEventListener("click",()=>{
        sliders.style.display = "block";
    });

    closeBtn.addEventListener("click",()=>{
        sliders.style.display = "none";
    });
})
