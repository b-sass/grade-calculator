let menus = document.querySelectorAll("select");
let level = document.querySelector("#year-modules-title").textContent.slice(5,6);
let updateButton = document.querySelector("#update-modules-button");
let error = document.querySelector("#error");

// Attach the 'change' event listener to each select element
menus.forEach(menu => {
    menu.addEventListener('change', function() {
        hideOption();
    });
});

function hideOption() {
    // First, make all options visible
    menus.forEach(menu => {
        let options = menu.options;
        for (let i = 0; i < options.length; i++) {
            options[i].style.display = "block";
        }
    });

    // Then, collect all selected values except the placeholder ""
    let selectedValues = Array.from(menus).map(menu => menu.value).filter(value => value !== "");

    // Iterate over each select element
    menus.forEach(menu => {
        let options = menu.options;
        // Iterate over each option in the current select
        for (let i = 0; i < options.length; i++) {
            // If the option's value is in the list of selected values, but not the current select's value, hide it
            if (selectedValues.includes(options[i].value) && menu.value !== options[i].value) {
                options[i].style.display = "none";
            }
        }
    });

    // Force individual project as one of level 6 modules
    if(level == 6 && selectedValues.includes("CI6600")) {
        console.log("includes");
        updateButton.disabled = false;
        error.style.display = "none";
    }
    // Skip this if level is not 6
    else if(level != 6) {
        console.log("level not 6");
        updateButton.disabled = false;
    }
    else {
        console.log("no");
        updateButton.disabled = true;
        error.style.display = "inline";
    }
}

// Initial call to set the correct display states based on the default selected options
hideOption();