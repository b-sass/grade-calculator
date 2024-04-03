<?php 

require_once(dirname(__FILE__) ."/dbSecrets.php");


$dsn = "mysql:host=". $host .";port=3306;dbname=". $dbname;

$pdo = new PDO($dsn, $user, $pass);

// Grades
function isValidGrade($grade) {
    if (!is_numeric($grade)) {
        return false;
    }
    return ($grade >= 0 && $grade<= 100);
}
function setOrAddGrade($userID, $assignmentID, $grade) {
    // if (!isValidGrade($grade)) {
    //     return 1;
    // }
    global $pdo;
    $sql = "SELECT * FROM Grade WHERE assignmentID = ? AND userID = ?";
    $getGradeStatement = $pdo->prepare($sql);
    $getGradeStatement->execute([$assignmentID, $userID]);
    $getGradeStatement->setFetchMode(PDO::FETCH_CLASS, "Grade");
    $gradeObject = $getGradeStatement->fetch();
    if ($gradeObject) {
        // update obtained grade
        $gradeID = $gradeObject->gradeID;
        $pdo->query("UPDATE Grade SET obtainedGrade = $grade WHERE gradeID = $gradeID");
        return 0;
    }
    // else: create new grade record
    $createGradeStatement = $pdo->prepare("INSERT INTO Grade (assignmentID, userID, obtainedGrade) VALUES (?, ?, ?)");
    $createGradeStatement->execute([$assignmentID, $userID, $grade]);
    return 0;
}

function addModuleForUser($userID, $moduleCode) {
    global $pdo;
    $sql = "INSERT INTO ModuleChoice VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userID, $moduleCode]);
}

function deleteModuleForUser($userID, $moduleCode) {
    global $pdo;
    $sql = "DELETE FROM ModuleChoice WHERE userID = ? AND moduleCode = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userID, $moduleCode]);
}

function getCurrentModuleGrade($userID, $moduleCode) {
    global $pdo;
    $getModuleGradesStatement = $pdo->prepare("SELECT Grade.obtainedGrade, Assignment.assignmentWeight
        FROM Grade, Assignment
        WHERE Grade.userID = ?
        AND Grade.assignmentID = Assignment.assignmentID
        AND Assignment.moduleCode = ?");
    $getModuleGradesStatement->execute([$userID, $moduleCode]);
    $grades = $getModuleGradesStatement->fetchAll(PDO::FETCH_OBJ);
    // get an array of OBJECTS that have assignmentWeight and obtainedGrade
    $totalGrade = 0;
    $totalWeight = 0;
    foreach ($grades as $grade) {
        $totalGrade += $grade->obtainedGrade * $grade->assignmentWeight;
    }
    return $totalGrade; 
}

// returns all modules for a given level e.g. level 4 (year 1)
function getAllModulesForLevel($level) {
    global $pdo;
    $sql = "SELECT * FROM Module WHERE moduleLevel = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$level]);
    $modules = $stmt->fetchAll(PDO::FETCH_CLASS, "Module");
    return $modules;
}

function getUserModulesForLevel($userID, $level) {
    global $pdo;
    $sql = "SELECT Module.moduleCode, moduleName, moduleLevel FROM ModuleChoice JOIN Module ON ModuleChoice.moduleCode=Module.moduleCode WHERE userID=? AND moduleLevel=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userID, $level]);
    $modules = $stmt->fetchAll(PDO::FETCH_CLASS, "Module");
    return $modules;
}
function getNormalAssignmentCountForModule($moduleCode) {
    global $pdo;
    $statement = $pdo->prepare("SELECT COUNT(*) as assignmentCount FROM Assignment WHERE moduleCode = ?");
    $statement->execute([$moduleCode]);
    return $statement->fetchAll(PDO::FETCH_OBJ)[0];
}
function getCurrentAssignmentCount($moduleCode, $userID) {
    global $pdo;
    $sql = "SELECT COUNT(g.assignmentID) as filledCount FROM Grade g, Assignment a
        WHERE g.assignmentID IN (SELECT assignmentID from Assignment WHERE moduleCode = ?)
        AND g.assignmentID = a.assignmentID
        AND g.userID = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$moduleCode, $userID]);
    return $statement->fetchAll(PDO::FETCH_OBJ)[0];
}

function getModuleGradesForUser($userID, $moduleCode) {
    global $pdo;
    $sql = "SELECT gradeID, assignmentID, userID, obtainedGrade FROM Grade WHERE userID = ? AND assignmentID IN (SELECT assignmentID from Assignment WHERE moduleCode = ?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$userID, $moduleCode]);
    $grades = $statement->fetchAll(PDO::FETCH_CLASS, "Grade");
    return $grades;
}
function getLevelForAssignment($assignmentID) {
    global $pdo;
    $statement = $pdo->prepare("SELECT m.moduleLevel FROM Module m, Assignment a WHERE m.moduleCode = a.moduleCode AND a.assignmentID = ?");
    $statement->execute([$assignmentID]);
    return $statement->fetchAll(PDO::FETCH_OBJ)[0]; // hope I don't summon an angry paul
}
function getAssignmentsForModule($moduleCode) {
    global $pdo;
    $sql = "SELECT * FROM Assignment WHERE moduleCode = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$moduleCode]);
    $assignments = $statement->fetchAll(PDO::FETCH_CLASS, "Assignment");
    return $assignments;
}

function getAssignmentGradeForUser($userID, $assignmentID) {
    global $pdo;
    $sql = "SELECT obtainedGrade FROM Grade
            WHERE userID = ? AND assignmentID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userID, $assignmentID]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, "Grade");
    $grade = $stmt->fetch();
    return $grade;
}
function getLetterGradeFromNumber($grade) {
    if (!isValidGrade($grade)) {
        return;
    }
    $gradeBoundaries = [
        85 => "A+",
        75 => "A",
        70 => "A-",
        67 => "B+",
        63 => "B",
        60 => "B-",
        57 => "C+",
        53 => "C",
        50 => "C-",
        47 => "D+",
        43 => "D",
        40 => "D-",
        35 => "FM",
    ];
    foreach ($gradeBoundaries as $boundary => $letterGrade) {
        if ($grade >= $boundary) {
            return $letterGrade;
        }
    }
    return "F";
}

function updateEmailForUser($userID, $email) {
    global $pdo;
    $sql = "UPDATE User
            SET email = ?
            WHERE userID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $userID]);
}

function updatePassForUser($userID, $pass) {
    global $pdo;
    $sql = "UPDATE User SET password = ? WHERE userID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pass, $userID]);
}
