-- local_infile option must be on in order for the script to run, run the following command
-- when logged in as root (using sudo)
-- SET GLOBAL local_infile=1;
-- and then run it like mariadb -u username -p < ./thisScript
-- WARNING running the script with existing tables will ADD the data to the existing tables,
-- potentially duplicating data (because we're using auto-increment, except for Modules).
-- ngl I didn't really need to make a script for a 1-time operation but I spent 2 hours tinkering the CSVs for it to work so hey
USE flare;

LOAD DATA LOCAL INFILE '../dataset/Module.csv'
INTO TABLE Module
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(moduleCode,moduleName,moduleLevel);

LOAD DATA LOCAL INFILE '../dataset/Assignment.csv'
INTO TABLE Assignment
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(moduleCode,assignmentName,assignmentWeight,assignmentSequenceIndex);

LOAD DATA LOCAL INFILE '../dataset/userSample.csv'
INTO TABLE User
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(username,email,password,isAdmin);