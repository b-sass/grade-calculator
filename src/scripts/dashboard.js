let buttons = document.querySelectorAll(".level-button");
let modules = document.querySelectorAll(".modules");
console.log(buttons);
console.log(modules);
buttons.forEach((button, index) => {
	button.addEventListener('click', () => {
		buttons.forEach(otherButton => {
			otherButton.style.backgroundColor = 'white'; // Reset all buttons to white
			otherButton.style.color = 'black';
			otherButton.style.border = '1px solid black';
		});
		button.style.backgroundColor = '#0D7BFF'; // Set clicked button to light blue
		button.style.color = 'white';
		button.style.border = '0';
		modules.forEach((module, moduleIndex) => {
			module.style.display = moduleIndex === index ? 'block' : 'none';
		})

		// console.log(buttons.indexOf(button));
		
	});
});

buttons[0].click();