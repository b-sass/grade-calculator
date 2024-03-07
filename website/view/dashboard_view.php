<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/styles.css">
    <title>Grade Flare Calculator</title>
</head>

<body>

    <?php include "../view/navbar.php"; ?>

    <div class="container my-3">
        <h2 class="text-center mb-4">Dashboard</h2>


        <div class="row mb-3">
            <div class="col">
                <button class="btn btn-outline-secondary me-2">Level 4</button>
                <button class="btn btn-outline-secondary me-2">Level 5</button>
                <button class="btn btn-outline-secondary">Level 6</button>
            </div>
            <div class="col text-end">
                <a href="../controller/yearmoduleedit.php"><button class="btn btn-primary">Edit Modules</button></a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <div class="bg-light p-3 rounded">
                    <h4>Modules</h4>

                    <div class="mb-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-8">
                                <div class="bg-secondary p-2 rounded">Module Name</div>
                            </div>
                            <div class="col-md-2">
                                <div class="bg-secondary p-2 rounded text-center">Grade</div>
                            </div>
                            <div class="col-md-2">
                                <a href="../controller/assessment.php">
                                    <button class="btn btn-outline-secondary w-100">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-light p-3 rounded">
                    <h4>Year Statistics</h4>
                    <div>
                        <strong>Classification:</strong> <span>1st</span>
                    </div>
                    <div>
                        <strong>Grade:</strong> <span>A+</span>
                    </div>
                    <div>
                        <strong>Percentage:</strong> <span>99%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>