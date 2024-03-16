let menus = document.querySelectorAll("select");
let modules = document.querySelectorAll("option");

modules.forEach(option => {
	option.addEventListener('click', hideOption);
	console.log(option.value);
})

console.log(menus[0].value);

function hideOption() {
	// Go through each module and set it to enabled
	this.selected = true;
	modules.forEach(option => {
		if (option.value != "") {
			option.style.display = "initial";
		}
	})

	// Go through each menu and disable module options that have
	// been selected already
	menus.forEach(dropdown => {
		modules.forEach(option => {
			if(dropdown.value == option.value) {
				option.style.display = "none";
			}
		});
	})
}

//Balls