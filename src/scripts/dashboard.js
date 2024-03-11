let buttons = document.querySelectorAll(".level-button");
console.log(buttons);

buttons.forEach(button => {
	button.addEventListener('click', () => {
	  buttons.forEach(otherButton => {
		otherButton.style.backgroundColor = 'white'; // Reset all buttons to white
		otherButton.style.color = 'black';
		otherButton.style.border = '1px solid black';
	  });
	  button.style.backgroundColor = '#0D7BFF'; // Set clicked button to light blue
	  button.style.color = 'white';
	  button.style.border = '0';
	});
  });