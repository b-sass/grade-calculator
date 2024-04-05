<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <div class="container mt-5" id="faq-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4" id="faq-title">FAQs</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="faq-accordion">
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I calculate my grade?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                Simply enter your assessments, their total marks, and the marks you obtained into the grade calculator. It will automatically compute your current grade based on the provided data.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can I use this calculator for any course?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                Yes, the grade calculator is designed to be versatile and can be used for any course where you can input the relevant grading criteria.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What do I do if I find an error in the calculation?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                If you believe there's an error in the calculation, please double-check your input data for accuracy. If the issue persists, feel free to contact us for further assistance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>