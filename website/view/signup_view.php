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

    <!-- main page -->
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-6">
                <h5 class="display-3 text-center mb-5">Sign up</h5>
                <form method="post" action="../controller/userLogin.php">
                    <div id="emailDiv" class="mb-3">
                        <div class="form-text mb-2">By signing up, you agree to the <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a>.</div>
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div id="usernameDiv" class="mb-3 d-none">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="usernameInput" required>
                    </div>
                    <div id="passwordDiv" class="mb-3 d-none">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput" required>
                    </div>
                    <div class="row align-items-center">
                        <a id="continueButton" href="#" class="col btn btn-primary">Continue</a>
                        <!-- btn-primary will be large/black/rounded (as per reference image) when customising stylesheet (should not be defined here)-->
                        <input id="signinButton" type="submit" class="col btn btn-primary d-none" value="Sign In">
                        <!-- btn-primary will be large/black/rounded (as per reference image) when customising stylesheet (should not be defined here)-->
                    </div>
                </form>
                <h6 class="text-center mt-3">Already have an account? <a href="login.php">Log in</a></h6>
            </div>
            <div class="d-none d-md-block col-md-4 col-lg-6">
                <img class="img-fluid" src="../images/lens-flare.jpg" alt="Flare Login Image">
            </div>
        </div>
    </div>

    <script>
        // may be ugly, will probably use JQuery?
        document.getElementById('continueButton').addEventListener('click', function(event) {
            document.getElementById('usernameDiv').classList.remove('d-none');
            document.getElementById('passwordDiv').classList.remove('d-none');
            document.getElementById("continueButton").classList.add('d-none');
            document.getElementById('signinButton').classList.remove('d-none');
        });
    </script>

    <!-- Bootstrap ref (remove if using npm for customisation later on) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>