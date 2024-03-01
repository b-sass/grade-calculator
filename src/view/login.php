<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flare Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- top bar -->
    <div id="topBar" class="container-fluid py-3 border border-2">
        <div class="row justify-content-between align-items-center">
            <a href="signup.php" class="col text-start d-none d-md-block text-decoration-none text-muted">
                <i class="bi bi-arrow-left"></i>Back
                <i class="bi bi-calculator"></i>[logo placeholder]
            </a>
            <!-- maybe d-none d-md-block not neccessary (test with small screen size) -->
            <div class="col text-end">
                <h6><a href="signup.php" class="text-decoration-none text-muted">Create an account</a></h6> <!-- this <a> style should probably be defined elsewhere/use some other class rather than add text-decoration-none text-muted each time -->
            </div>
        </div>
    </div>

    <!-- main page -->
    <div class="container-xxl border-warning">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-6">
                <h5 class="display-3 text-center mb-5">Login</h5>
                <form method="post" action="../controller/userLogin.php">
                    <div id="emailDiv" class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div id="passwordDiv" class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput">
                    </div>
                    <div class="row align-items-center">
                        <button id="loginButton" type="submit" href="#" class="btn btn-primary row">Login</button>
                    </div>
                    <div class="my-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMeChekbox">
                        <label class="form-check-label" for="rememberMeChekbox">Remember Me</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="receiveUpdatesCheckbox">
                        <label class="form-check-label" for="receiveUpdatesCheckbox">I want to receive emails about the
                            product, feature updates, events and marketing promotions.</label>
                    </div>
                </form>
                <h6 class="text-center">Don't have an account? <a href="./signup.php">Sign up</a></h6>
            </div>
            <div class="d-none d-md-block col-md-4 col-lg-6">
                <img class="img-fluid" src="../../images/lens-flare.jpg" alt="Flare Login Image">
            </div>
        </div>
    </div>

    <!-- Bootstrap ref (remove if using npm for customisation later on) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>