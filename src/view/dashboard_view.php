<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>		
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link href="../view/css/bootstrap/generatedConfig/style.min.css" rel="stylesheet"> -->

    <title>Grade Flare Calculator</title>
    <style>
    </style>

</head>

<body>
    <?php include "../view/navbar.php"; ?>



    <div class="container my-3" id="dashboard-container">
        <h2 class="text-center mb-4" id="dashboard-title">Dashboard</h2>

        <form class="row mb-3" id="level-buttons-row" method="post" action="../controller/yearmoduleedit.php">
            <div class="col">
                <input id="currentTab" name="currentTab" />
                <input type="button" class="btn btn-outline-secondary me-2 level-button" id="level4-btn" value="Level 4" />
                <input type="button" class="btn btn-outline-secondary me-2 level-button" id="level5-btn" value="Level 5" />
                <input type="button" class="btn btn-outline-secondary level-button" id="level6-btn" value="Level 6" />
            </div>
            <div class="col text-end">
                <button type="submit" class="btn btn-primary" id="edit-modules-btn">Edit Modules</button>
            </div>
        </form>

        <div class="row" id="content-row">
            <div class="col-md-8">
                <div class="bg-light p-3 rounded" id="modules-section">
                    <h4 id="modules-title" class="mb-3">Modules</h4>

                    <?php foreach ($degreeModules as $i=>$yearModule): ?>
                    <div class="mb-3 modules" id="module-list-<?= $i+4 ?>">
                        <!-- Repeat this block for each module -->
                        <?php foreach ($yearModule as $j=>$m): ?>
                        <form method="get" action="../controller/assessment.php" class="row g-3 align-items-center module-item" id="module<?= $j+1 ?>">
                            <div class="col-md-8">
                                <input name="module" type="hidden" value=<?= $m->moduleCode ?>>
                                <div class="p-2 rounded" id="module1-name"><?= $m->moduleName ?></div>
                            </div>
                            <div class="col-md-2">
                                <div class="p-2 rounded text-center grade<?= $i ?>" id="module1-grade"><?= $moduleGrades[$i][$j] ?>%</div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-outline-secondary w-100" id="module1-edit-btn">Edit</button>
                            </div>
                        </form>
                        <?php endforeach ?>
                        <!-- End of module block -->
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-light p-3 rounded" id="year-statistics-section">
                    <h4 id="year-statistics-title">Year Statistics</h4>
                    <div id="classification-stat">
                        <strong>Classification:</strong> <span id="classification-value">1st</span>
                    </div>
                    <div id="grade-stat">
                        <strong>Grade:</strong> <span id="grade-value">A+</span>
                    </div>
                    <div id="percentage-stat">
                        <strong>Percentage:</strong> <span id="percentage-value">99%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../scripts/dashboard.js"></script>
</body>

</html>