<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/Main-SCSS-Syling/styles.scss" type="text/css" rel="stylesheet">
    <title>Grade Flare Calculator</title>
    <style>
        /* Color Variables */
        :root {
            --light-gray: #E0E0E0;
            --dark-blue: #162A40;
            --bright-blue: #0D7BFF;
            --light-blue: #4DB8FF;
            --white: #FFFFFF;
            --border-color: #CCCCCC;
            --hover-bg-color: #D6E4FF;
            /* Light blue for hover state background */
        }

        /* Base styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
            
        }

        /* Dashboard container */
        #dashboard-container {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Dashboard title */
        #dashboard-title {
            color: var(--dark-blue);
            margin-bottom: 30px;
            /* Increased margin for visual separation */
        }

        /* Level buttons row */
        #level-buttons-row {
            margin-bottom: 20px;
        }

        #level-buttons-row .btn-outline-secondary {
            color: var(--dark-blue);
            background-color: var(--white);
            border-color: var(--dark-blue);
        }

        #level-buttons-row .btn-outline-secondary:hover {
            background-color: var(--hover-bg-color);
            border-color: var(--bright-blue);
        }

        /* Edit modules button */
        #edit-modules-btn {
            background-color: var(--bright-blue);
            color: var(--white);
            border-color: var(--bright-blue);
        }

        #edit-modules-btn:hover {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
        }

        /* Modules section styles */
        #modules-section {
            background-color: var(--light-gray);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            /* Increased space below Modules section */
        }

        #modules-title {
            color: var(--dark-blue);
            margin-bottom: 20px;
            /* Increased bottom margin for "Modules" title */
        }

        /* Module items */
        .module-item {
            background-color: var(--white);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .module-item:hover {
            background-color: var(--hover-bg-color);
        }

        #module1-name {
            background-color: var(--white);
            color: var(--dark-blue);
            text-align: left;
            padding: 15px;
            /* Increased padding */
            border-radius: 8px;
            font-size: 1.2em;
            /* Bigger font size for module name */
            font-weight: bold;
            /* Make it bold */
        }

        #module1-grade {
            background-color: var(--bright-blue);
            color: var(--white);
            text-align: center;
            padding: 10px;
            border-radius: 8px;
        }

        /* Year statistics styles */
        #year-statistics-section {
            background-color: var(--light-gray);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            /* Add some margin below for spacing */
        }

        #year-statistics-title {
            color: var(--dark-blue);
            margin-bottom: 15px;
        }

        #year-statistics-section strong {
            color: var(--dark-blue);
        }

        #year-statistics-section span {
            color: var(--bright-blue);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #level-buttons-row .btn {
                width: 100%;
                margin-bottom: 10px;
                /* Space between buttons when stacked */
            }

            #edit-modules-btn {
                margin-top: 10px;
            }

            #content-row>div {
                margin-bottom: 10px;
            }
        }
    </style>

</head>

<body>
    <?php include "../view/navbar.php"; ?>



    <div class="container my-3" id="dashboard-container">
        <h2 class="text-center mb-4" id="dashboard-title">Dashboard</h2>

        <div class="row mb-3" id="level-buttons-row">
            <div class="col">
                <button class="btn btn-outline-secondary me-2" id="level4-btn">Level 4</button>
                <button class="btn btn-outline-secondary me-2" id="level5-btn">Level 5</button>
                <button class="btn btn-outline-secondary" id="level6-btn">Level 6</button>
            </div>
            <div class="col text-end">
                <a href="../controller/yearmoduleedit.php"><button class="btn btn-primary" id="edit-modules-btn">Edit Modules</button></a>
            </div>
        </div>

        <div class="row" id="content-row">
            <div class="col-md-8">
                <div class="bg-light p-3 rounded" id="modules-section">
                    <h4 id="modules-title" class="mb-3">Modules</h4>

                    <div class="mb-3" id="module-list">
                        <!-- Repeat this block for each module -->
                        <div class="row g-3 align-items-center module-item" id="module1">
                            <div class="col-md-8">
                                <div class="p-2 rounded" id="module1-name">Module Name</div>
                            </div>
                            <div class="col-md-2">
                                <div class="p-2 rounded text-center" id="module1-grade">Grade</div>
                            </div>
                            <div class="col-md-2">
                                <a href="../controller/assessment.php">
                                    <button class="btn btn-outline-secondary w-100" id="module1-edit-btn">Edit</button>
                                </a>
                            </div>
                        </div>
                        <!-- End of module block -->
                    </div>
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
</body>

</html>