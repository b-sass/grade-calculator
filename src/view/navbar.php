<style>
    /* General Navbar Styling */
    .navbar {
        background-color: #E0E0E0;
        /* Light gray background */
        border-bottom: 3px solid #0D7BFF;
        /* Blue border for some accent */
    }

    /* Navbar links */
    .navbar-nav .nav-link {
        color: #162A40;
        /* Dark blue text */
        font-weight: 500;
        transition: color 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-item.active .nav-link {
        color: #0D7BFF;
        /* Bright blue text for hover and active state */
    }

    /* Navbar toggler icon */
    .navbar-toggler {
        border-color: #0D7BFF;
        /* Border color of toggler */
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23162A40' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        /* Custom SVG for the toggler icon with dark blue lines */
    }

    /* Button styling */
    .btn-outline-success {
        color: #162A40;
        /* Dark blue text */
        border-color: #162A40;
        /* Dark blue border */
        transition: all 0.3s ease-in-out;
    }

    .btn-outline-success:hover {
        background-color: #0D7BFF;
        /* Bright blue background on hover */
        color: #E0E0E0;
        /* Light gray text on hover */
    }

    .btn-success {
        background-color: #4DB8FF;
        /* Light blue background */
        border-color: #4DB8FF;
        /* Light blue border */
    }

    .btn-success:hover {
        background-color: #0D7BFF;
        /* Bright blue background on hover */
        border-color: #0D7BFF;
        /* Bright blue border on hover */
    }

    /* Responsive behavior */
    @media (max-width: 767px) {
        .navbar-collapse {
            background-color: #E0E0E0;
            /* Ensures the mobile menu matches the navbar */
        }
    }
</style>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid justify-content-between">

        <a class="navbar-brand" href="../controller/home.php"><img src="../images/logoB.png" alt="" style="max-width: 64px;"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" href="../controller/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/overallclassfication.php">Overall Classification </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQs</a>
                </li>
            </ul>
            <?php if ($_SESSION["loggedInUser"] == null) { ?>
                <form class="d-flex">
                    <a href="../controller/login.php"><button class="btn btn-outline-success me-2" type="button">Login</button></a>
                    <a href="../controller/signup.php"><button class="btn btn-success" type="button">Signup</button></a>
                </form>
            <?php } else { ?>
                <p><?= $_SESSION["loggedInUser"]->email ?></p>
            <?php } ?>
        </div>
    </div>
</nav>