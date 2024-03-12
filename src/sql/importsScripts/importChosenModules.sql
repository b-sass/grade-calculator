USE flare;

LOAD DATA LOCAL INFILE '../dataset/chosenModuleSample.csv'
INTO TABLE ChosenModule
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(userID,moduleCode);
