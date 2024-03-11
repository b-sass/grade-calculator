USE flare;

CREATE TABLE IF NOT EXISTS User (
	userID INT(6) NOT NULL AUTO_INCREMENT,
	username VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL,
	password VARCHAR(64) NOT NULL,
    isAdmin TINYINT(1),
	PRIMARY KEY (userID)
);

CREATE TABLE IF NOT EXISTS Module (
	moduleCode VARCHAR(10),
	moduleName VARCHAR(60),
    moduleLevel INT(1),
	PRIMARY KEY (moduleCode)
);

CREATE TABLE IF NOT EXISTS ChosenModule (
	userID INT(6) NOT NULL,
	moduleCode VARCHAR(10) NOT NULL,
	FOREIGN KEY (userID) REFERENCES User(userID),
	FOREIGN KEY (moduleCode) REFERENCES Module(moduleCode),
	PRIMARY KEY (userID, moduleCode)
);

CREATE TABLE IF NOT EXISTS Assignment (
	assignmentID INT(6) NOT NULL AUTO_INCREMENT,
	moduleCode VARCHAR(10) NOT NULL,
	assignmentName VARCHAR(60),
	assignmentWeight DEC(5,2),
	assignmentSequenceIndex INT(2),
	FOREIGN KEY (moduleCode) REFERENCES Module(moduleCode),
	PRIMARY KEY (assignmentID)
);

CREATE TABLE IF NOT EXISTS Scenario (
	scenarioID INT(8) NOT NULL AUTO_INCREMENT,
	userID INT(6) NOT NULL,
	FOREIGN KEY (userID) REFERENCES User(userID),
	PRIMARY KEY (scenarioID)
);

CREATE TABLE IF NOT EXISTS Grade (
	gradeID INT(6) NOT NULL AUTO_INCREMENT,
	assignmentID INT(6) NOT NULL,
	scenarioID INT(8) NOT NULL,
	obtainedGrade INT(3) NOT NULL,
	FOREIGN KEY (assignmentID) REFERENCES Assignment(assignmentID),
	FOREIGN KEY (scenarioID) REFERENCES Scenario(scenarioID),
	PRIMARY KEY (gradeID)
);
