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
            line-height: 1.6;
        }

        h1 {
            color: #0D7BFF;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        p {
            font-size: 1rem;
            color: #333;
            margin-bottom: 1rem;
        }

        #img {
            max-width: 250px;
            border: 3px solid #162A40;
            padding: 5px;
            background-color: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 960px;
            margin: 50px auto;
            padding: 2rem;
            background-color: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #0D7BFF;
            text-decoration: underline;
        }

        a:hover,
        a:focus {
            color: #4DB8FF;
            text-decoration: none;
        }

        button {
            background-color: #162A40;
            color: #FFFFFF;
            border: 1px solid transparent;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        button:hover,
        button:focus {
            background-color: #0D7BFF;
            border-color: #0C6ECD;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 20px;
                padding: 1rem;
            }

            #img {
                max-width: 150px;
            }

            h1 {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }

            p {
                font-size: 0.9rem;
            }
        }
    </style>
    <title>Grade Flare Calculator</title>
</head>

<body>

    <?php include "../view/navbar.php"; ?>


    <div class="container mt-5" id="terms-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4" id="terms-title">Privacy Policy</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p id="terms-update">Updated at March 10th, 2024</p>
                <section>
                    <h2>X</h2>
                    <p>text</p>
                </section>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>