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
            --input-bg-color: #F3F3F3;
            --input-border-color: #B6D4FE;
        }

        /* Base styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
        }

        /* Container styling */
        #modules-container {
            background-color: var(--white);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 3rem;
        }

        /* Title styling */
        #year-modules-title {
            color: var(--dark-blue);
            text-align: center;
            margin-bottom: 2rem;
        }

        /* Form label styling */
        .form-label {
            display: block;
            color: var(--dark-blue);
            margin-bottom: 0.5rem;
        }

        /* Form select styling */
        .form-select {
            display: block;
            width: 100%;
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--dark-blue);
            background-color: var(--white);
            background-clip: padding-box;
            border: 1px solid var(--dark-blue);
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /* Dropdown container styling */
        #module-1-container,
        #module-2-container,
        #module-3-container,
        #module-4-container {
            margin-bottom: 1rem;
        }

        /* Hover and focus states for form select */
        .form-select:hover {
            border-color: var(--input-border-color);
        }

        .form-select:focus {
            border-color: var(--bright-blue);
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }

        /* Button styling */
        .btn-primary {
            color: var(--white);
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
        }

        .btn-primary:hover {
            color: var(--white);
            background-color: var(--bright-blue);
            border-color: var(--bright-blue);
        }

        /* Back button styling */
        #back-button {
            color: var(--white);
            background-color: var(--light-blue);
            border-color: var(--light-blue);
            margin-top: 1rem;
        }

        #back-button:hover {
            color: var(--white);
            background-color: var(--bright-blue);
            border-color: var(--bright-blue);
        }
    </style>
</head>

<body>

    <?php include "../view/navbar.php"; ?>
    
    <div class="container my-3" id="modules-container">
        <h2 class="mb-4" id="year-modules-title">Year <?= $level ?> Modules</h2>
        <form id="modules-form">
            <!-- Dropdown 1 -->
            <div class="mb-3" id="module-1-container">
                <label for="module1-dropdown" class="form-label" id="module-1-label">Module 1</label>
                <select class="form-select" id="module1-dropdown">
                    <option value="" disabled selected>Choose Module</option>
                    <?php foreach ($modules as $m): ?>
                    <option value=<?= $m->moduleCode ?>><?= $m->moduleName ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <!-- Dropdown 2 -->
            <div class="mb-3" id="module-2-container">
                <label for="module2-dropdown" class="form-label" id="module-2-label">Module 2</label>
                <select class="form-select" id="module2-dropdown">
                    <option value="" disabled selected>Choose Module</option>
                    <?php foreach ($modules as $m): ?>
                    <option value=<?= $m->moduleCode ?>><?= $m->moduleName ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <!-- Dropdown 3 -->
            <div class="mb-3" id="module-3-container">
                <label for="module3-dropdown" class="form-label" id="module-3-label">Module 3</label>
                <select class="form-select" id="module3-dropdown">
                <option value="" disabled selected>Choose Module</option>
                    <?php foreach ($modules as $m): ?>
                    <option value=<?= $m->moduleCode ?>><?= $m->moduleName ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <!-- Dropdown 4 -->
            <div class="mb-3" id="module-4-container">
                <label for="module4-dropdown" class="form-label" id="module-4-label">Module 4</label>
                <select class="form-select" id="module4-dropdown">
                    <option value="" disabled selected>Choose Module</option>
                    <?php foreach ($modules as $m): ?>
                    <option value=<?= $m->moduleCode ?>><?= $m->moduleName ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="update-modules-button">Update</button>
        </form>

        <a href="../controller/dashboard.php" id="back-link">
            <button class="btn btn-primary mt-3" id="back-button">Back</button>
        </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>