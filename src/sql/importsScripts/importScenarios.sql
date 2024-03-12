-- local_infile option must be on in order for the script to run, run the following command
-- when logged in as root (using sudo)
-- SET GLOBAL local_infile=1;
-- and then run it like mariadb -u username -p < ./thisScript
-- WARNING running the script with existing tables will ADD the data to the existing tables,
-- potentially duplicating data (because we're using auto-increment, except for Modules).
-- ngl I didn't really need to make a script for a 1-time operation but I spent 2 hours tinkering the CSVs for it to work so hey
USE flare;

LOAD DATA LOCAL INFILE '../dataset/scenarioSample.csv'
INTO TABLE Scenario
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS
(userID);

