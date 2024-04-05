<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Grade Flare Calculator</title>

    <style>
        /* Color Variables */
        :root {
            --light-gray: #E0E0E0;
            --dark-blue: #162A40;
            --bright-blue: #0D7BFF;
            --light-blue: #4DB8FF;
            --white: #FFFFFF;
            --secondary-gray: #6c757d;
            /* Bootstrap's secondary color for gray elements */
        }

        .bg-secondary {
            color: #0D7BFF;
        }

        /* Base styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
        }

        /* Overall Classification Container */
        #overall-classification-container {
            background-color: var(--white);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            /* Spacing at the bottom */
        }

        #overall-classification-title,
        #overall-title {
            color: var(--dark-blue);
            margin-bottom: 20px;
        }

        /* Level Containers */
        #level-5-container,
        #level-6-container {
            margin-bottom: 30px;
            /* Spacing between level containers */
        }

        #level-5,
        #level-6 {
            background-color: var(--light-gray);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        #level-5-title,
        #level-6-title {
            color: var(--dark-blue);
            margin-bottom: 15px;
        }

        /* Module and Grade Styles */
        #module-name-5,
        #module-name-6,
        #module-grade-5,
        #module-grade-6 {
            background-color: var(--dark-blue);
            color: var(--white);
            padding: 10px;
            border-radius: 0.25rem;
            margin-bottom: 10px;
        }

        /* Overall Weight Containers */
        #overall-weight-5-container,
        #overall-weight-6-container {
            margin-top: 20px;
            /* Spacing above the overall weight container */
        }

        #overall-weight-title-5,
        #overall-weight-title-6 {
            color: var(--dark-blue);
            
            margin-bottom: 10px;
        }

        #overall-weight-value-5,
        #overall-weight-value-6 {
            background-color: var(--dark-blue);
            color: var(--white);
            padding: 10px;
            border-radius: 0.25rem;
        }

        /* Classification and Grade Sections */
        #classification-section,
        #grade-section {
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            /* Spacing between sections */
        }

        #classification-title,
        #grade-title {
            color: var(--dark-blue);
            margin-bottom: 15px;
        }

        #classification-value,
        #grade-value {
            background-color: var(--bright-blue);
            color: var(--white);
            padding: 10px;
            border-radius: 0.25rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            #overall-classification-container,
            #level-5,
            #level-6,
            #classification-section,
            #grade-section {
                padding: 10px;
                margin-bottom: 20px;
            }

            #level-rows,
            #overall-container {
                margin-top: 0;
                /* Remove margin-top on smaller screens */
            }

            .row {
                margin-bottom: 10px;
                /* More spacing between rows on smaller screens */
            }
        }
    </style>

</head>

<body>

    <?php include "../view/navbar.php";
        $missingGrades = false ?>

    <div class="container my-3" id="overall-classification-container">
        <h2 class="text-center mb-4" id="overall-classification-title">Overall Classification</h2>
        <div class="row" id="level-rows">

            <div class="col-xl-6" id="level-5-container">
                <div class="bg-light p-3 rounded text-center" id="level-5">
                    <h4 id="level-5-title">Level 5</h4>
                    <!-- Repeat this block four times for each module -->
                    <?php if ($level5modules == null): 
                    for ($i = 0; $i < 4; $i++): ?>
                    <div class="mb-3" id="module-container-5">
                        <div class="row g-3 align-items-center" id="module-row-5">
                            <div class="col-md-10">
                                <div class=" p-2 rounded" id="module-name-5">NOT YET CHOSEN</div>
                            </div>
                            <div class="col-md-2">
                                <div class=" p-2 rounded text-center" id="module-grade-5">0%</div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; else: ?>
                    <?php foreach ($level5modules as $key=>$m):
                        $asterisk = "" ;
                        if (!$m->isFilled) {
                            $asterisk = "*";
                            $missingGrades = true;
                        } ?>
                    <div class="mb-3" id="module-container-5">
                        <div class="row g-3 align-items-center" id="module-row-5">
                            <div class="col-md-10">
                                <div class="p-2 rounded" id="module-name-5"><?= $m->moduleName ?><?= $asterisk ?></div>
                            </div>
                            <div class="col-md-2">
                                <div class="p-2 rounded text-center <?= $asterisk ? "bg-danger" : "" ?>" id="module-grade-5"><?= $level5grades[$key] ?>%</div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <?php endif ?>
                    <!-- End of module block -->
                    <div class="mb-3" id="overall-weight-5-container">
                        <div class="row g-3 align-items-center mt-4" id="overall-weight-5">
                            <div class="col-md-12">
                                <h4 id="overall-weight-title-5">Weighted Average of best 105 credits (20%)</h4>
                                <div class="p-2 rounded" id="overall-weight-value-5">%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6" id="level-6-container">
                <div class="bg-light p-3 rounded text-center" id="level-6">
                    <h4 id="level-6-title">Level 6</h4>
                    <!-- Repeat this block four times for each module -->
                    <?php if ($level6modules == null): 
                    for ($i = 0; $i < 4; $i++): ?>
                    <div class="mb-3" id="module-container-6">
                        <div class="row g-3 align-items-center" id="module-row-6">
                            <div class="col-md-10">
                                <div class=" p-2 rounded" id="module-name-6">NOT YET CHOSEN</div>
                            </div>
                            <div class="col-md-2">
                                <div class=" p-2 rounded text-center" id="module-grade-6">0%</div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; else: ?>
                    <?php foreach ($level6modules as $key=>$m):
                        $asterisk = "" ;
                        if (!$m->isFilled) {
                            $asterisk = "*";
                            $missingGrades = true;
                        } ?>
                    <div class="mb-3" id="module-container-6">
                        <div class="row g-3 align-items-center" id="module-row-6">
                            <div class="col-md-10">
                                <div class=" p-2 rounded" id="module-name-6"><?= $m->moduleName ?><?= $asterisk ?></div>
                            </div>
                            <div class="col-md-2">
                                <div class=" p-2 rounded text-center <?= $asterisk ? "bg-danger" : "" ?>" id="module-grade-6"><?= $level6grades[$key] ?>%</div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                    <!-- End of module block -->
                    <div class="mb-3" id="overall-weight-6-container">
                        <div class="row g-3 align-items-center mt-4" id="overall-weight-6">
                            <div class="col-md-12">
                                <h4 id="overall-weight-title-6">Weighted Average of best 105 credits (80%)</h4>
                                <div class="p-2 rounded" id="overall-weight-value-6">%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php if ($missingGrades): ?>
            <div class="row">
                <p class="text-danger fw-bolder fst-italic">
                    Careful: Some grades have not been entered. Make sure to go back to the dashboard and input all assessments
                    to get an accurate grade calculation. The classification shown below shows results with currently entered grades.
                </p>
            </div>
        <?php endif ?>
        <div class="row mt-4" id="overall-container">

            <h2 class="text-center mb-4" id="overall-title">Overall</h2>

            <div class="col-md-12" id="classification-container">
                <div class="p-3 rounded text-center" id="classification-section">
                    <h4 id="classification-title">Classification</h4>
                    <div class="mb-3" id="classification-row">
                        <div class="row g-3 align-items-center" id="classification-content">
                            <div class="col-md-12">
                                <div class="p-2 rounded" id="classification-value">Classification</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" p-3 rounded text-center" id="grade-section">
                    <h4 id="grade-title">Grade</h4>
                    <div class="mb-1" id="grade-row">
                        <div class="row g-3 align-items-center" id="grade-content">
                            <div class="col-md-12">
                                <div class="p-2 rounded" id="grade-value">Grade</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="fst-italic">
                Your overall grade is calculated using your level 5 and level 6 module averages.
                Level 5 grades only account for 20% of the final calculation, and is therefore
                weighted by dividing it by a factor of 5. Similarly, level 6 accounts for 80% of
                the final classification and is multiplied by 4/5. Note that for both levels, only the
                best 105 (out of 120) of each year's credits are taken into account, bringing your yearly
                grades up. The two weighted averages are then added up and result in your final grade and classification.
            </p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../scripts/overallGrade.js"></script>
</body>

</html>