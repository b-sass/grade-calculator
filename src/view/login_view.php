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
            --primary-color: #0D6EFD;
            /* Bootstrap primary blue */
            --secondary-color: #6C757D;
            /* Bootstrap secondary gray */
            --background-color: #F8F9FA;
            /* Light gray background color */
            --white: #FFFFFF;
            --dark-blue: #162A40;
        }

        #login-container {
     
            padding: 2rem;
            border-color: var(--primary-color);
            /* Adding a blue border */
        }

        #login-row {
            margin-bottom: 2rem;
        }

        #login-section {
            background-color: var(--white);
            padding: 2rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* subtle shadow for depth */
        }

        #login-title {
            color: var(--dark-blue);
            margin-bottom: 1.5rem;
        }

        #login-form {
            margin-bottom: 1rem;
        }

        #user-email-container,
        #user-password-container {
            margin-bottom: 1.5rem;
        }

        #email-label,
        #password-label {
            color: var(--dark-blue);
            font-weight: bold;
        }

        #userEmail,
        #userPassword {
            border: 1px solid var(--primary-color);
            border-radius: 0.25rem;
        }

        #userEmail:focus,
        #userPassword:focus {
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
            border-color: var(--primary-color);
        }

        #forgot-username-link a,
        #forgot-password-link a {
            color: var(--secondary-color);
            text-decoration: none;
        }

        #forgot-username-link a:hover,
        #forgot-password-link a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        #submit-login {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
        }

        #submit-login:hover {
            background-color: var(--dark-blue);
            border-color: var(--dark-blue);
        }

        #signup-prompt {
            color: var(--secondary-color);
        }

        #signup-link {
            color: var(--primary-color);
            font-weight: bold;
        }

        #signup-link:hover {
            text-decoration: underline;
        }

        #login-image-container {
            padding: 0;
        }

        #login-stock-image {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }

    </style>
</head>

<body>

    <?php include "../view/navbar.php"; ?>

    <div class="container container-xxl border-warning" id="login-container">
        <div class="row align-items-center" id="login-row">
            <!-- Login Input / Left Side -->
            <div class="col-md-12 col-lg-6" id="login-section">
                <h5 class="display-3 text-center mb-5" id="login-title">Login</h5>
                <?php if(isset($_SESSION["warning"])): ?>
                <p style="color:red;"><?= $_SESSION["warning"] ?></p>
                <?php endif ?>
                <form method="post" action="../controller/userLogin.php" id="login-form">
                    <!-- Input for user details -->
                    <div class="mb-3" id="user-email-container">
                        <label for="userEmail" class="form-label" id="email-label">Email</label>
                        <input type="email" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp">
                        <div id="forgot-username-link" class="form-text">
                            <a href="#" class="text-muted">Forgot Username?</a>
                        </div>
                    </div>
                    <div class="mb-3" id="user-password-container">
                        <label for="userPassword" class="form-label" id="password-label">Password</label>
                        <input type="password" name="password" class="form-control" id="userPassword">
                        <div id="forgot-password-link" class="form-text">
                            <a href="#" class="text-muted">Forgot password?</a>
                        </div>
                    </div>
                    <!-- Button for login -->
                    <div class="align-items-center row" id="login-button-container">
                        <button type="submit" class="btn btn-primary col" id="submit-login">Login</button>
                    </div>
                </form>
                <h6 class="text-center" id="signup-prompt">
                    Don't have an account? <a href="./signup.php" id="signup-link">Sign up</a>
                </h6>
            </div>
            <!-- Picture / Right Side -->
            <div class="col-lg-6 " id="login-image-container">
                <img class="img-fluid" id="login-stock-image" src="https://i.ibb.co/GQNQgBn/stockimageuni.jpg" alt="University stock image">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>