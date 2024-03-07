<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Assessments</title>
    <style>
        
        body {
            background-color: #f8f9fa;
        }
        .assessment-header {
            background-color: #e9ecef;
            border-bottom: 2px solid #dee2e6;
            padding: 1rem 0;
        }
        .assessment-item {
            padding: 0.5rem 0;
            border-bottom: 1px solid #dee2e6;
        }
        .assessment-item:last-child {
            border-bottom: none;
        }
        .assessment-input {
            box-shadow: inset 0 1px 3px rgb(0 0 0 / 10%);
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: inset 0 1px 3px rgb(0 0 0 / 10%), 0 0 8px rgba(128, 189, 255, 0.6);
        }


    </style>
</head>
<body>

    <?php include "../view/navbar.php";?>

    <div class="container my-5">
        <h1 class="text-center mb-4">Assessments</h1>

        <div class="row text-center mb-3 assessment-header">
            <div class="col-md-6">
                <span class="h4">Assessment Name</span>
            </div>
            <div class="col-md-6">
                <span class="h4">Grade</span>
            </div>
        </div>

        <!-- Repeat this block for each assessment -->
        <div class="row text-center mb-2 assessment-item">
            <div class="col-md-6 align-self-center">
                <span class="lead">Database Fundamentals</span>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control assessment-input" placeholder="Enter Grade">
            </div>
        </div>
        <!-- ... more assessments -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMneT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
