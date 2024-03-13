let grade = 0;
let finalGrade = 0;

let grades5 = document.querySelectorAll("#module-grade-5");
let grades6 = document.querySelectorAll("#module-grade-6");

let weight20 = document.querySelector("#overall-weight-value-5");
let weight80 = document.querySelector("#overall-weight-value-6");

let finalClass = document.querySelector("#classification-value");
let finalPercentage = document.querySelector("#grade-value");

let sum = 0;
let worseModuleGrade = 100;
let moduleGrade = 0;
grades5.forEach(grade => {
	moduleGrade = parseFloat(grade.textContent);
	if (moduleGrade < worseModuleGrade) {
		worseModuleGrade = moduleGrade;
	}
	sum += moduleGrade;
});
sum -= worseModuleGrade / 2; // added
grade = (Math.round(sum/3.5 * 0.2));
// grade = (Math.round(sum/4 * 0.2));
weight20.textContent = grade+ "%";
finalGrade += grade;

sum = 0;
grades6.forEach(grade => {
	sum += parseFloat(grade.textContent);
});

grade = (Math.round(sum/4 * 0.8 * 100) / 100);
weight80.textContent = grade+ "%";
finalGrade += grade;

finalPercentage.textContent = finalGrade + "%";
finalClass.textContent = getClass(finalGrade);


function getClass(grade) {
	if (grade >= 70) return "1st";
	else if (grade >= 60) return "2.1";
	else if (grade >= 50) return "2.2";
	else return "3rd";
}
