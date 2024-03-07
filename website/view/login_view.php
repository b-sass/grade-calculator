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

    <div class="container-xxl border-warning" id="container-of-stuff">
        <div class="row align-items-center">
            <!-- Login Input / Left Side -->
            <div class="col-md-8 col-lg-6" id="login">
                <h5 class="display-3 text-center mb-5">Login</h5>
                <form method="post" action="../controller/userLogin.php">
                    <!-- Input for user details !-->
                    <div id="emailDiv" class="mb-3">
                        <label for="emailInput" class="form-label">Email/Username</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <a href="#" class="text-muted">Forgot Username?</a>
                    </div>
                    <div id="passwordDiv" class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput">
                        <a href="#" class="text-muted">Forgot password?</a>
                    </div>
                    <!-- Button for login !-->
                    <div class="align-items-center row" aria-label="button in need of help">
                        <button id="loginButton" type="submit" href="#" class="btn btn-primary col">Login</button>
                    </div>
                </form>
                <h6 class="text-center">Don't have an account? <a href="./signup.php">Sign up</a></h6>
            </div>
            <!-- Picture / Right Side -->
            <div class="d-none d-md-block col-md-4 col-lg-6" id="image-holder">
                <img class="img" id="stock-image" src="https://i.ibb.co/GQNQgBn/stockimageuni.jpg">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>