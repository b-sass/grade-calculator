<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Main-SCSS-Syling/styles.scss" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #E0E0E0;
            color: #162A40;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            color: #0D7BFF;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            color: #121212;
        }

        #img {
            max-width: 300px;
            border: 5px solid #162A40;
            padding: 10px;
            background-color: #FFFFFF;
        }

        .container {
            max-width: 1140px;
            margin-top: 50px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #0D7BFF;
            text-decoration: none;
        }

        a:hover {
            color: #4DB8FF;
            text-decoration: underline;
        }

        button {
            background-color: #162A40;
            color: #E0E0E0;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0D7BFF;
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 30px;
            }

            #img {
                max-width: 200px;
            }

            h1 {
                font-size: 1.75rem;
            }

            p {
                font-size: 1rem;
            }
        }

    </style>
    <title>Grade Flare Calculator</title>
</head>

<body>

    <?php include "../view/navbar.php"; ?>


    <div class="container mt-5" id="account-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4" id="account-title">My Account</h1>
            </div>
        </div>
        <form id="account-form" method="post" action="../controller/accountManager.php">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Email field -->
                    <div class="mb-3" id="email-field-container">
                        <label for="emailInput" class="form-label" id="email-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="email" aria-describedby="emailHelp" placeholder="Enter a new email">
                    </div>
                    <!-- Username field -->
                    <div class="mb-3" id="password-field-container">
                        <label for="passwordInput" class="form-label" id="password-label">Password</label>
                        <input type="text" class="form-control" id="passwordInput" minlength="8" maxlength="64" name="pass" placeholder="Enter a new password">
                    </div>
                    <!-- Course field -->
                    <div class="mb-3" id="course-field-container">
                        <label for="courseInput" class="form-label" id="course-label">Course</label>
                        <select class="form-select" id="courseInput" name="course">
                            <option value="Computer Science">Computer Science</option>
                        </select>
                    </div>

                    <!-- Submit button -->
                    <div class="text-center" id="submit-button-container">
                        <button type="submit" class="btn btn-primary" id="account-submit">Update Account</button>
                    </div>
                    <br>
                </div>
            </div>
        </form>
        <div class="text-center" id="logout-button-container">
        <form method="post" action="../controller/accountManager.php">    
            <button name="logout" type="submit" class="btn btn-primary" id="logout-submit">Log Out</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>