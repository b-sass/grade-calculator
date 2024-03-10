<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Main-SCSS-Syling/styles.scss" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Main container and typography */
        body {
            background-color: #E0E0E0;
            /* Light gray background for contrast */
            color: #162A40;
            /* Dark blue text for readability */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* A clean, modern font choice */
        }

        /* Heading styling */
        h1 {
            color: #0D7BFF;
            /* Bright blue for the main title */
            font-weight: bold;
            margin-bottom: 1rem;
            /* Consistent spacing under headings */
        }

        p {
            font-size: 1.1rem;
            /* Slightly larger paragraph font size for readability */
            color: #121212;
            /* Very dark blue (almost black) for the text */
        }

        /* Logo styling */
        #img {
            max-width: 300px;
            /* Restrict the size of the logo if necessary */
            border: 5px solid #162A40;
            /* Dark blue border for the logo */
            padding: 10px;
            /* Spacing around the logo */
            background-color: #FFFFFF;
            /* White background for the logo */
        }

        /* Container and alignment */
        .container {
            max-width: 1140px;
            /* Consistent max-width with Bootstrap containers */
            margin-top: 50px;
            /* More top space */
            padding: 20px;
            /* Padding for the container */
            background-color: #FFFFFF;
            /* White background for the content area */
            border-radius: 8px;
            /* Rounded corners for the container */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
        }

        /* Link styling */
        a {
            color: #0D7BFF;
            /* Bright blue for links */
            text-decoration: none;
            /* No underlines on links */
        }

        a:hover {
            color: #4DB8FF;
            /* Light blue for link hover state */
            text-decoration: underline;
            /* Underline on hover for clear interaction */
        }

        /* Button styling */
        button {
            background-color: #162A40;
            /* Dark blue for buttons */
            color: #E0E0E0;
            /* Light gray text on buttons for contrast */
            border: none;
            /* Remove default border */
            padding: 10px 20px;
            /* Vertical and horizontal padding for buttons */
            border-radius: 4px;
            /* Rounded corners for buttons */
            cursor: pointer;
            /* Cursor pointer to indicate clickable */
            transition: background-color 0.3s;
            /* Transition for button background color */
        }

        button:hover {
            background-color: #0D7BFF;
            /* Bright blue for button hover state */
        }

        /* Responsive behavior */
        @media (max-width: 768px) {
            .container {
                margin-top: 30px;
                /* Less top space on smaller devices */
            }

            #img {
                max-width: 200px;
                /* Smaller logo on smaller devices */
            }

            h1 {
                font-size: 1.75rem;
                /* Smaller heading on smaller devices */
            }

            p {
                font-size: 1rem;
                /* Smaller paragraph on smaller devices */
            }
        }

        /* Additional styles could be added here based on further content and layout */
    </style>
    <title>Grade Flare Calculator</title>
</head>

<body>

    <?php include "../view/navbar.php"; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-4">Grade Flare Calculator</h1>
                <p>Grade flare allows you to calculate, predict, and store your grades so you know exactly how much progress you are achieving. Get the most out of Grade Flare by predicting your grade.</p>
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="../images/logoB.png" alt="Grade Flare Logo" class="img-fluid" id="img">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>