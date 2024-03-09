<?php 
$host = "localhost";
$user = "flare";
$pass = "flare";
$dbname = "testing";


$dsn = "mysql:host=". $host .";port=3306;dbname=". $dbname;

$pdo = new PDO($dsn, $user, $pass);

// Grades
function calculateYearClassification($userId)
{
    // TODO: Should return a String like A+, B- etc.
    // Corresponding to what the user got for all
    // Their modules on the current (selected) year.
}
// grade is an int/float between 0 and 100
function setUserAssessmentGrade($scenarioId, $assignmentId, $grade)
{
    if (!is_numeric($grade)) {
        echo ("ERROR: trying to input non-numeric value for grade");
        return;
    }
    if ($grade > 100 || $grade < 0) {
        echo ("please stop being stupid");
        return;
    }
    // .. any other test needed to validate dumb user input
    // input should be valid below this point

    // function should: 
    // check if the grade for this existing scenarioId and assignment ID exist (in which case : UPDATE grade), if not: create NEW record
    global $pdo;
    $doesGradeExistStatement = $pdo->prepare("SELECT id, assignmentId, scenarioId, obtainedGrade FROM Grades WHERE assignmentId = ? AND scenarioId = ?");
    $doesGradeExistStatement->execute([$assignmentId, $scenarioId]);
    $gotGrade = $doesGradeExistStatement->fetchAll(PDO::FETCH_CLASS, 'Grade')[0]; // at that point gotGrade should be an object of type Grade
    if ($gotGrade) // NULL would be false, an object = true
    {
        // TODO: update value

        return;
    }
    // (else) create new grade (new row)
    $createGradeStatement = $pdo->prepare("INSERT INTO Grades (assignmentId, scenarioId, obtainedGrade) VALUES (?, ?, ?)");
    $createGradeStatement->execute([$assignmentId, $scenarioId, $grade]);
}

// Random example
// INSERT INTO Employees (FirstName, LastName, Email)
// VALUES ('John', 'Doe', 'john.doe@example.com');


// random paul example for syntax and stuff
// function getUsersBySurname($surname)
// {
//   if ($surname == "")
//   {
//     return getAllUsers();
//   }
//   global $pdo;
//   $statement = $pdo->prepare('SELECT id, givenname, surname, address FROM customers
//                               WHERE surname = ?');
//   $statement->execute([$surname]);
//   $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Customer');
//   return $users;
// }
?>
