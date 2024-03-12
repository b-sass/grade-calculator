<?php 

require_once(dirname(__FILE__) ."/dbSecrets.php");

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
function isValidGrade($grade) {
    if (!is_numeric($grade)) {
        return false;
    }
    return ($grade >= 0 && $grade<= 100);
}
function setUserAssignmentGrade($scenarioID, $assignmentID, $grade) {
    if (!isValidGrade($grade)) {
        return 1;
    }
    global $pdo;
    $doesGradeExistStatement = $pdo->prepare("SELECT id, assignmentID, scenarioID, obtainedGrade FROM Grades WHERE assignmentID = ? AND scenarioID = ?");
    $doesGradeExistStatement->execute([$assignmentID, $scenarioID]);
    $gradeObject = $doesGradeExistStatement->fetchAll(PDO::FETCH_CLASS, 'Grade')[0];
    if ($gradeObject) {
        // update obtained grade
        $gradeID = $gradeObject->gradeID;
        $updateStatement = $pdo->query("UPDATE Grade SET obtainedGrade = $grade WHERE gradeID = $gradeID");
        return 0;
    }
    // else: create new grade record
    $createGradeStatement = $pdo->prepare("INSERT INTO Grades (assignmentID, scenarioID, obtainedGrade) VALUES (?, ?, ?)");
    $createGradeStatement->execute([$assignmentID, $scenarioID, $grade]);
    return 0;
}

function getCurrentModuleGrade($scenarioID, $moduleCode) {
    global $pdo;
    /*
    get an array of OBJECTS that have assignmentWeight and obtainedGrade
    */
    $getModuleGradesStatement = $pdo->prepare("SELECT obtainedGrade, assignmentWeight
        FROM Grade, Assignment
        WHERE Grade.scenarioID = ?
        AND Grade.assignmentID = Assignment.assignmentID
        AND Assignment.moduleCode = ?");
    $getModuleGradesStatement->execute([$scenarioID, $moduleCode]);
    $grades = $getModuleGradesStatement->fetchAll(PDO::FETCH_OBJ);
    $totalGrade = 0;
    $totalWeight = 0;
    foreach ($grades as $grade) {
        $totalGrade += $grade->obtainedGrade * $grade->assignmentWeight;
        $totalWeight += $grade->assignmentWeight;
    }
    return $totalGrade * (1 / $totalWeight);
}

// returns all modules for a given level e.g. level 4 (year 1)
function getAllModulesForLevel($level) {
    global $pdo;
    $sql = "SELECT * FROM Module WHERE level = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$level]);
    $modules = $stmt->fetchAll(PDO::FETCH_CLASS, "Module");
    return $modules;
}

function getUserModulesForLevel($userID, $level) {
    global $pdo;
    $sql = "SELECT Module.moduleCode, moduleName, level FROM ChosenModule JOIN Module ON ChosenModule.moduleCode=Module.moduleCode WHERE userID=? AND level=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userID, $level]);
    $modules = $stmt->fetchAll(PDO::FETCH_CLASS, "Module");
    return $modules;
}

function getLetterGradeFromNumber($grade) {
    if (!isValidGrade($grade)) {
        return;
    }
    // TODO correct the values
    if ($grade > 80) return "A+";
    if ($grade > 75) return "A";
    if ($grade > 70) return "A-";
    if ($grade > 66) return "B+";
    if ($grade > 63) return "B";
    if ($grade > 60) return "B-";
    if ($grade > 56) return "C+";
    if ($grade > 53) return "C";
    if ($grade > 50) return "C-";
    if ($grade > 40) return "D";
    if ($grade > 30) return "E";
    return "F";
}