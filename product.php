<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products Page</title>
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

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/rug_1.jpeg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Products</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

   <!-- Product -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Collection //</h6>
                <h1 class="mb-5">Explore Our Premium Carpet Designs</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <!-- Persian Carpet -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item bg-light h-100 text-center p-4">
                        <div class="overflow-hidden mb-3">
                            <img class="img-fluid" src="img/Carpets_1.jpeg" style="height: 200px !important;"
                                alt="Persian Carpet">
                        </div>
                        <h5 class="fw-bold mb-2">Persian Carpets</h5>
                        <p class="mb-3">Traditional hand-knotted pieces with rich cultural heritage and intricate
                            designs.</p>
                        <a href="Persian-Carpets.php" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>

                <!-- Modern Carpet -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item bg-light h-100 text-center p-4">
                        <div class="overflow-hidden mb-3">
                            <img class="img-fluid" src="img/Carpets_2.jpeg" style="height: 200px !important;"
                                alt="Modern Carpet">
                        </div>
                        <h5 class="fw-bold mb-2">Modern Carpets</h5>
                        <p class="mb-3">Contemporary styles with bold colors and geometric patterns for modern
                            interiors.</p>
                        <a href="Modern-Carpets.php" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
                <!-- Silk Carpet -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item bg-light h-100 text-center p-4">
                        <div class="overflow-hidden mb-3">
                            <img class="img-fluid" src="img/Carpets_3.jpeg" style="height: 200px !important;"
                                alt="Silk Carpet">
                        </div>
                        <h5 class="fw-bold mb-2">Silk Carpets</h5>
                        <p class="mb-3">Luxurious, soft, and finely detailed — perfect for elegant spaces.</p>
                        <a href="Silk-Carpets.php" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
                <!-- Custom Carpet -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item bg-light h-100 text-center p-4">
                        <div class="overflow-hidden mb-3">
                            <img class="img-fluid" src="img/Carpets_5.jpeg" style="height: 200px !important;"
                                alt="Custom Carpet">
                        </div>
                        <h5 class="fw-bold mb-2">Wool Carpet</h5>
                        <p class="mb-3">Tailor-made designs to suit your style, space, and color palette.</p>
                        <a href="Wool-Carpet.php" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
                <!-- Acrylic Carpet -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item bg-light h-100 text-center p-4">
                        <div class="overflow-hidden mb-3">
                            <img class="img-fluid" src="img/Carpets_6.jpeg" style="height: 200px !important;"
                                alt="Custom Carpet">
                        </div>
                        <h5 class="fw-bold mb-2">Acrylic Carpet</h5>
                        <p class="mb-3">Tailor-made designs to suit your style, space, and color palette.</p>
                        <a href="Acrylic-Carpet.php" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product end  -->


    <!-- Footer -->
    <?php include('footer.php') ?>