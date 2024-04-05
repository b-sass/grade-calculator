let menus = document.querySelectorAll("select");

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
}

// Initial call to set the correct display states based on the default selected options
hideOption();