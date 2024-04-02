let buttons = document.querySelectorAll(".level-button");
let modules = document.querySelectorAll(".modules");
let currentTab = document.querySelector("#currentTab");


let levelToShow = parseInt(document.getElementById("editedLevel").textContent);

// console.log(buttons);
// console.log(modules);

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

		refreshStats(index);
	});
});

function refreshStats(index) {
	console.log("refresh stats: index is " + index);
	// Percentage
	let sum = 0;
	let percentage = document.querySelector("#percentage-value");
	let grades = document.querySelectorAll(".grade"+index);
	grades.forEach(grade => {
		sum += parseFloat(grade.textContent);
	});
	let grade = (Math.round(sum/4 * 100) / 100);
	percentage.textContent = grade + "%";

	// Classification
	let classification = document.querySelector("#classification-value");
	classification.textContent = getClass(grade);
	// Grade

	let letter = document.querySelector("#grade-value");
	letter.textContent = getLetter(grade);
}

// copied from dataAccess
function getLetter(grade) {
	if (grade >= 85) return "A+"; // I'm sorry I just love that it looks dumb but kind of isn't
	if (grade >= 75) return "A";
	if (grade >= 70) return "A-";
	if (grade >= 67) return "B+";
	if (grade >= 63) return "B";
	if (grade >= 60) return "B-";
	if (grade >= 57) return "C+";
	if (grade >= 53) return "C";
	if (grade >= 50) return "C-";
	if (grade >= 47) return "D+";
	if (grade >= 43) return "D";
	if (grade >= 40) return "D-";
	if (grade >= 35) return "FM";
	return "F";
}

function getClass(grade) {
	if (grade >= 70) return "1st";
	else if (grade >= 60) return "2.1";
	else if (grade >= 50) return "2.2";
	else return "3rd";
}
// click the button when page loads
buttons[levelToShow - 4].click();