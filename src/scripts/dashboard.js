let buttons = document.querySelectorAll(".level-button");
let modules = document.querySelectorAll(".modules");
let currentTab = document.querySelector("#currentTab");

console.log(buttons);
console.log(modules);
buttons.forEach((button, index) => {
	button.addEventListener('click', () => {
		// Set styling for all buttons
		buttons.forEach(otherButton => {
			otherButton.style.backgroundColor = 'white'; // Reset all buttons to white
			otherButton.style.color = 'black';
			otherButton.style.border = '1px solid black';
		});
		// Set styling for the clicked button
		button.style.backgroundColor = '#0D7BFF'; // Set clicked button to light blue
		button.style.color = 'white';
		button.style.border = '0';
		// Display modules for the clicked button
		modules.forEach((module, moduleIndex) => {
			module.style.display = moduleIndex === index ? 'block' : 'none';
		})
		// Set the chosen level
		currentTab.value = index + 4;
	});
});

// click the button when page loads
buttons[0].click();