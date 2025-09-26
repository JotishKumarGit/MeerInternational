<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meer international</title>
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
        :root {
            --primary: #007BFF;
            --secondary: #17A2B8;
            --light: #F8F9FA;
            --dark: #343A40;
        }

        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/Carpets_1.jpeg') center center no-repeat;
            background-size: cover;
            padding: 100px 0;
            color: #fff;
        }

        .page-header h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
        }

        .product-img {
            max-height: 500px;
            object-fit: cover;
            width: 100%;
            border-radius: 6px;
        }

        .btn-buy {
            background-color: var(--primary);
            color: #fff;
            text-transform: uppercase;
            font-weight: 500;
        }

        .btn-buy:hover {
            background-color: var(--secondary);
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- header -->
    <?php include('header.php'); ?>

    <!-- Page Header -->
    <section class="page-header text-center">
        <div class="container">
            <h1>Acrylic Carpet</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white-50">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white-50">Products</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Acrylic Carpet</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <!-- Image -->
                <div class="col-md-6">
                    <img src="img/Carpets_6.jpeg" style="height:auto; width: 100%;" alt="Acrylic Carpet"
                        class="product-img shadow">
                </div>

                <!-- Product Info -->
                <div class="col-md-6">
                    <h2 class="mb-3">Modern Acrylic Carpet</h2>
                    <p class="text-muted mb-4">Durable | Soft Texture | Made in India</p>
                    <p>
                        Discover comfort and style with our modern acrylic carpet. Designed for contemporary living,
                        this carpet offers a soft feel underfoot while being easy to maintain. Ideal for high-traffic
                        areas,
                        it's a perfect blend of function and fashion.
                    </p>

                    <ul class="list-unstyled my-4">
                        <li>✔️ Dimensions: 5ft x 7ft</li>
                        <li>✔️ Material: High-Quality Acrylic Fiber</li>
                        <li>✔️ Origin: India</li>
                        <li>✔️ Warranty: 2 Years</li>
                    </ul>

                    <button class="btn btn-buy btn-lg" data-bs-toggle="modal"
                        data-bs-target="#enquiryModal">Enquiry</button>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>