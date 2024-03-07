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

    <?php include "../view/navbar.php";?>

    <div class="container my-3">
        <h2 class="mb-4">Year X Modules</h2>
        <form>
            <!-- Dropdown 1 -->
            <div class="mb-3">
                <label for="dropdown1" class="form-label">Module 1</label>
                <select class="form-select" id="dropdown1">
                    <option selected>Choose Module</option>
                    <option value="1">Module A</option>
                    <option value="2">Module B</option>
                    <option value="3">Module C</option>
                </select>
            </div>
            <!-- Dropdown 2 -->
            <div class="mb-3">
                <label for="dropdown2" class="form-label">Module 2</label>
                <select class="form-select" id="dropdown2">
                    <option selected>Choose Module</option>
                    <option value="1">Module A</option>
                    <option value="2">Module B</option>
                    <option value="3">Module C</option>
                </select>
            </div>
            <!-- Dropdown 3 -->
            <div class="mb-3">
                <label for="dropdown3" class="form-label">Module 3</label>
                <select class="form-select" id="dropdown3">
                    <option selected>Choose Module</option>
                    <option value="1">Module A</option>
                    <option value="2">Module B</option>
                    <option value="3">Module C</option>
                </select>
            </div>
            <!-- Dropdown 4 -->
            <div class="mb-3">
                <label for="dropdown4" class="form-label">Module 4</label>
                <select class="form-select" id="dropdown4">
                    <option selected>Choose Module</option>
                    <option value="1">Module A</option>
                    <option value="2">Module B</option>
                    <option value="3">Module C</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        
        </form>

        <a href="../controller/dashboard.php"><button class="btn btn-primary mt-3">Back</button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
