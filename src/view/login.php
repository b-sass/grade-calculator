<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Flare Login</title>
  <link rel="stylesheet" href="../../css/bootstrapConfig.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <!-- top bar -->
  <div id="topBar" class="container-fluid py-3 border border-2">
    <div class="row justify-content-between align-items-center">
      <p class="col text-start d-none d-md-block text-decoration-none text-muted">
        <i class="bi bi-calculator"></i>[logo placeholder]
      </p>
      <!-- maybe d-none d-md-block not neccessary (TODO test with small screen size) -->
      <div class="col text-end">
        <h6><a href="signup.php" class="text-decoration-none">Create an account</a></h6> <!-- this <a> style should probably be defined elsewhere/use some other class rather than add text-decoration-none text-muted each time -->
      </div>
    </div>
  </div>

  <!-- main page -->
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
      <!-- Picture / Right Side -->
      <div class="d-none d-md-block col-md-4 col-lg-6" id="image-holder">
        <img class="img" id="stock-image" src="https://i.ibb.co/GQNQgBn/stockimageuni.jpg">
      </div>
    </div>
  </div>

  <!-- Bootstrap ref (remove if using npm for customisation later on) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>