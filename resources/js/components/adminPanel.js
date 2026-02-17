window.addEventListener("DOMContentLoaded", () => {
    const addAlbumBtn = document.getElementById("addAlbumBtn");
    const modal = document.getElementById("modalAlbum");
    const overlay = document.getElementById("overlay");
    const closeModal = document.getElementById("closeModal");
    
    const editButtons = document.querySelectorAll(".edit-btn-trigger"); 
    const editModal = document.getElementById("editAlbumModal"); // Pastikan ID ini ada di HTML nanti

    if (addAlbumBtn && modal && overlay) {
        addAlbumBtn.addEventListener("click", (e) => {
            e.preventDefault();
            modal.classList.remove("hidden");
            overlay.classList.remove("hidden");
        });
    }

    if (closeModal) {
        closeModal.addEventListener("click", () => {
            modal.classList.add("hidden");
            if(editModal) editModal.classList.add("hidden");
            overlay.classList.add("hidden");
        });
    }

    overlay?.addEventListener("click", () => {
        modal.classList.add("hidden");
        if(editModal) editModal.classList.add("hidden");
        overlay.classList.add("hidden");
    });
});