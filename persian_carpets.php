<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Persian Carpets</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>
        .product-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            padding: 20px;
        }

        .product-image img {
            width: 100%;
            border-radius: 8px;
        }

        .product-details h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-details p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .product-details ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .product-details ul li {
            margin-bottom: 8px;
        }

        .whatsapp-btn {
            background-color: #25d366;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
        }

        .whatsapp-btn:hover {
            background-color: #20b358;
            color: #fff;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/rug_2.jpeg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Persian Carpets</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Persian Carpets</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Single page -->

    <div class="container product-container">
        <div class="row align-items-center">
            <!-- Left Side Image -->
            <div class="col-md-6 product-image mb-4 mb-md-0">
                <img src="img/rug_1.jpeg" alt="Persian Carpet">
            </div>

            <!-- Right Side Content -->
            <div class="col-md-6 product-details">
                <h2>Persian Carpets</h2>
                <p>
                    Persian carpets are known for their intricate designs, rich colors, and unmatched craftsmanship.
                    Handwoven using traditional methods, these carpets add elegance and warmth to any space.
                </p>

                <h5>Keywords:</h5>
                <ul>
                    <li>Handwoven Carpet</li>
                    <li>Traditional Persian Design</li>
                    <li>Silk and Wool Blend</li>
                    <li>Luxury Carpet</li>
                    <li>Authentic Craftsmanship</li>
                </ul>

                <!-- WhatsApp Enquiry Button -->
                <a href="#" class="whatsapp-btn" onclick="enquireWhatsApp()">Enquire on WhatsApp</a>
            </div>
        </div>
    </div>


    <script>
        function enquireWhatsApp() {
            const phoneNumber = "917905951309"; // 🔁 Replace with your WhatsApp number
            const message = "Hello, I am interested in the Persian Carpet. Please provide more details.";
            const encodedMessage = encodeURIComponent(message);
            const url = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
            window.open(url, '_blank');
        }
    </script>

    <!-- Footer -->
    <?php include('footer.php') ?>