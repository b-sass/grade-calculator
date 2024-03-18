<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/Main-SCSS-Syling/styles.scss" type="text/css" rel="stylesheet">
    <title>Assessments</title>
    <style>
        /* Color Variables */
        :root {
            --light-gray: #E0E0E0;
            --dark-blue: #162A40;
            --bright-blue: #0D7BFF;
            --light-blue: #4DB8FF;
            --white: #FFFFFF;
            --border-color: #CCCCCC;
            --input-bg-color: #F3F3F3;
            /* Input background color */
        }

        /* Base styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--white);
        }

        #assessments-container {
            background-color: var(--white);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 16px darkgray;
        }

        #assessments-title {
            color: var(--dark-blue);
            margin-bottom: 1.5rem;
        }

        #assessment-header-row {
            border-bottom: 2px solid var(--dark-blue);
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }

        #assessment-name-header,
        #assessment-grade-header {
            color: var(--dark-blue);
        }

        .assessment-item {
            margin-bottom: 1rem;
            padding: 0.5rem 0;
        }

        #assessment-name-1,
        .assessment-name {
            color: var(--dark-blue);
            font-weight: bold;
        }

        #assessment-grade-col-1 .assessment-input,
        .assessment-grade .assessment-input {
            background-color: var(--input-bg-color);
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            color: var(--dark-blue);
            padding: 0.5rem;
            font-size: 1rem;
        }

        /* Hover effect for input fields */
        .assessment-input:hover,
        .assessment-input:focus {
            border-color: var(--bright-blue);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(13, 123, 255, 0.6);
            outline: 0;
        }
 
    </style>
</head>

<body>

    <?php include "../view/navbar.php"; ?>

    <div class="container my-5" id="assessments-container">
        <h1 class="text-center mb-4" id="assessments-title">Assessments</h1>

        <div class="row text-center mb-3 assessment-header" id="assessment-header-row">
            <div class="col-md-6" id="assessment-name-header">
                <span class="h4" id="assessment-name-title">Assessment Name</span>
            </div>
            <div class="col-md-6" id="assessment-grade-header">
                <span class="h4" id="assessment-grade-title">Grade</span>
            </div>
        </div>

        <!-- Repeat this block for each assessment -->
        <form method="post" action="../controller/updateAssessments.php" class="text-center">
            <?php foreach ($assignments as $key=>$a): ?>
            <div class="row text-center mb-2 assessment-item" id="assessment-item-1">
                <div class="col-md-6 align-self-center" id="assessment-name-col-1">
                    <input name="assignmentID[]" type="hidden" value="<?= $a->assignmentID ?>" />
                    <span class="lead" id="assessment-name-1"><?= $a->assignmentName ?></span>
                </div>
                    <div class="col-md-6" id="assessment-grade-col-1">
                        <input name="grade[]" type="number" min="0" max="100" class="form-control assessment-input" id="assessment-input-1" placeholder="Current Grade: <?= $currentGrades[$key]->obtainedGrade ?>">
                    </div>

            </div>
            <?php endforeach ?>
        <!-- ... more assessments -->
            <br>
            <input type="submit" class="btn btn-primary" value="Save assessments"/>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMneT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>