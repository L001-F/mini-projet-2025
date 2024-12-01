<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Welcome to the Computer Science Department</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff; /* White background */
            color: #333; /* Dark text for contrast */
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        /* Hero Section */
        .hero {
            color: white;
            padding: 80px 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            background-color: #0056b3; /* Blue Background */
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 600;
            position: relative;
        }

        .hero h1 span {
            color: white; /* Text is now white */
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
            transition: all 0.3s ease;
        }

        /* Creative underline effect */
        .hero h1 span::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background-color: #DA9B2B; /* Yellow underline */
            transition: all 0.3s ease;
        }

        .hero h1 span:hover::before {
            width: 100%; /* Full width underline on hover */
        }

        .hero h1 span:hover {
            color: #DA9B2B; /* Text changes to yellow on hover */
        }

        .hero p {
            font-size: 1.25rem;
            margin-top: 10px;
        }

        .cta-btn {
            background-color: #007bff; /* Button Blue */
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
            margin-top: 20px;
        }

        .cta-btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
            transform: scale(1.05);
            color: white; /* Ensure text stays white on hover */
        }

        /* Jumbotron Section */
        .jumbotron {
            background-color: rgba(255, 255, 255, 0.9); /* Light background */
            border-radius: 8px;
            padding: 50px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .jumbotron h1 {
            font-size: 2.5rem;
            color: #0056b3; /* Blue for title */
        }

        .jumbotron p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 0;
        }

        /* Footer */
        .footer {
            background-color: #f9f9f9; /* Light Gray */
            color: #777;
            padding: 30px 0;
            text-align: center;
            margin-top: 50px;
        }

        .footer a {
            color: #007bff; /* Blue for links */
            text-decoration: none;
            font-weight: 600;
            margin: 0 15px;
        }

        /* Responsive Media Queries */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .cta-btn {
                padding: 10px 20px;
            }

            .card {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <h1>Welcome to the <br><span>Computer Science Department</span></h1>
            <p>Quickly access your administrative documents and stay informed about the latest news.</p>
            <a href="../index.html" class="cta-btn">Discover</a> <!-- Link to index.html -->
        </div>
    </section>

    <!-- Jumbotron Section -->
    <section class="jumbotron">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1>Access Your Administrative Documents</h1>
                    <p>Certificate of enrollment, transcript, and more at your fingertips.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="../../Controler/admin.php">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Username</label>
                                    <input type="text" id="form3Example3" name="username" class="form-control" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" id="form3Example4" name="password" class="form-control" required />
                                </div>
                                <button type="submit" name="loginA" class="btn btn-primary btn-block mb-4" style="background-color: #007bff; border-color: #007bff;">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section class="footer">
        <div class="container">
            <p>&copy; 2024 University of M'hamed Bougara</p>
        </div>
    </section>

    <!-- Bootstrap JS & Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybI6N4w7d0hghP0Xggcxj8eP6Qql4gZwGKXzRmPDiA+Nm5P4pm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0pM6P4Afxxmjfwg0v5ZZy96wC1J5g9pgswYeO77Xyb9ScjIZ" crossorigin="anonymous"></script>

</body>
</html>
