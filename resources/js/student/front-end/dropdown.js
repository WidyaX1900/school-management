document.querySelectorAll(".js-dropdown-btn").forEach((button) => {
    button.addEventListener("click", (event) => {
        const dataTarget = event.target.dataset.target;
        const dropdownEl = document.getElementById(dataTarget);

        dropdownEl.classList.toggle("hidden");        
    });    
});