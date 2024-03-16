// let menus = document.querySelectorAll("select");
// let modules = document.querySelectorAll("option");

// modules.forEach(option => {
// 	option.addEventListener('click', updateDropdownOptions);
// 	console.log(option.value);
// })

// console.log(menus[0].value);

// function hideOption() {
// 	// Go through each module and set it to enabled
// 	this.selected = true;
// 	modules.forEach(option => {
// 		if (option.value != "") {
// 			option.style.display = "initial";
// 		}
// 	})

// 	// Go through each menu and disable module options that have
// 	// been selected already
// 	menus.forEach(dropdown => {
// 		modules.forEach(option => {
// 			if(dropdown.value == option.value) {
// 				option.style.display = "none";
// 			}
// 		});
// 	})
// }

// function updateDropdownOptions() {
//     // Assuming 'modules' is a NodeList of <option> elements
//     // and 'menus' is a NodeList of <select> elements

//     // First, collect all selected values in an array
//     let selectedValues = Array.from(menus).map(dropdown => dropdown.value);

//     // Iterate over each dropdown menu
//     menus.forEach(dropdown => {
//         // Temporarily store the current value to re-select it later
//         let currentValue = dropdown.value;

//         // Iterate over each option in the dropdown
//         Array.from(dropdown.options).forEach(option => {
//             // If the option's value is selected in any dropdown (excluding the current dropdown if it's re-selecting its own value)
//             if (selectedValues.includes(option.value) && currentValue !== option.value) {
//                 // Hide or disable option - Here you might choose to actually remove the option or mark it as disabled
//                 option.disabled = true; // This will make the option unselectable but still visible. Alternatively, you could remove the option.
//             } else {
//                 // Show or enable option
//                 option.disabled = false;
//             }
//         });

//         // Re-select the current value if it was previously selected
//         dropdown.value = currentValue;
//     });
// }


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