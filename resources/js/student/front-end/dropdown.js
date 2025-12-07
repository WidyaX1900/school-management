const dropdownButtons = document.querySelectorAll(".js-dropdown-btn"); 

dropdownButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
        const dataTarget = event.target.dataset.target;
        const dropdownEl = document.getElementById(dataTarget);
        const currDropdownId = dropdownEl.id;    

        dropdownEl.classList.toggle("hidden");
        
        const dropdowns = Array.from(document.querySelectorAll(".js-dropdown"));
        const otherDropdowns = dropdowns.filter((dropdown) => dropdown.id !== currDropdownId);
        otherDropdowns.forEach((dropdown) => {
            dropdown.classList.add("hidden");            
        });        
    });    
});