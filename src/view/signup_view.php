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
        }

        

        /* Main container */
        #signup-container {
            background-color: var(--white);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Form title */
        #signup-title {
            color: var(--dark-blue);
            margin-bottom: 1.5rem;
        }

        /* Form text and links */
        #signup-agreement,
        #login-prompt {
            color: var(--dark-blue);
            margin-bottom: 1rem;
        }

        #signup-agreement a,
        #login-prompt a {
            color: var(--bright-blue);
        }

        #signup-agreement a:hover,
        #login-prompt a:hover {
            text-decoration: underline;
        }

        /* Form labels */
        .form-label {
            color: var(--dark-blue);
        }

        /* Input fields styling */
        .form-control {
            background-color: var(--input-bg-color);
            border: 1px solid var(--border-color);
            border-radius: 0.25rem;
            color: var(--dark-blue);
        }

        .form-control:focus {
            border-color: var(--bright-blue);
            box-shadow: 0 0 0 0.2rem rgba(13, 191, 255, 0.25);
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--bright-blue);
            border-color: var(--bright-blue);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--light-blue);
            border-color: var(--light-blue);
        }

        /* Image container */
        #signup-image-container img {
            max-width: 100%;
            border-radius: 0.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #signup-image-container {
                display: none;
                /* Hide the image on smaller screens for focus on form */
            }
        }
    </style>

</head>

<body>

    <?php include "../view/navbar.php"; ?>

    <!-- main page -->
    <div class="container-xxl" id="signup-container">
        <div class="row align-items-center" id="signup-row">
            <div class="col-md-8 col-lg-6" id="signup-form-container">
                <h5 class="display-3 text-center mb-5" id="signup-title">Sign up</h5>
                <?php if(isset($_SESSION["warning"])): ?>
                <p style="color:red;"><?= $_SESSION["warning"] ?></p>
                <?php endif ?>
                <form method="post" action="../controller/userLogin.php" id="signup-form">
                    <div class="mb-3" id="signup-email-container">
                        <div class="form-text mb-2" id="signup-agreement">By signing up, you agree to the <a href="../controller/termsOfUse.php">Terms of use</a> and <a href="../controller/privacypolicy.php">Privacy Policy</a>.</div>
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3 d-none" id="signup-username-container">
                        <label for="usernameInput" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="usernameInput" required>
                    </div>
                    <div class="mb-3 d-none" id="signup-password-container">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput" required>
                    </div>
                    <div class="row align-items-center" id="signup-action-container">
                        <a href="#" class="col btn btn-primary" id="continueButton">Continue</a>
                        <input type="submit" class="col btn btn-primary d-none" id="signinButton" value="Sign In">
                    </div>
                </form>
                <h6 class="text-center mt-3" id="login-prompt">Already have an account? <a href="login.php">Log in</a></h6>
            </div>
            <div class="d-none d-md-block col-md-4 col-lg-6" id="signup-image-container">
                <img class="img-fluid" src="../images/lens-flare.jpg" alt="Flare Login Image" id="signup-flare-image">
            </div>
        </div>
    </div>


    <script>
        document.getElementById('continueButton').addEventListener('click', function(event) {
            // event.preventDefault(); // Prevent the default anchor behavior
            document.getElementById('signup-username-container').classList.remove('d-none');
            document.getElementById('signup-password-container').classList.remove('d-none');
            document.getElementById('continueButton').classList.add('d-none');
            document.getElementById('signinButton').classList.remove('d-none');
        });
    </script>


    <!-- Bootstrap ref (remove if using npm for customisation later on) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>