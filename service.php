<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services</title>
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
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/rug_2.jpeg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Carpet Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-brush fa-2x me-3"></i>
                            <h4 class="m-0">Carpet Cleaning</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-ruler fa-2x me-3"></i>
                            <h4 class="m-0">Custom Size & Design</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-tools fa-2x me-3"></i>
                            <h4 class="m-0">Rug Repair & Resizing</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-truck fa-2x me-3"></i>
                            <h4 class="m-0">Nationwide Delivery</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/rug_5.jpeg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">15 Years of Carpet Cleaning Expertise</h3>
                                    <p class="mb-4">We specialize in deep carpet cleaning, stain removal, and
                                        fabric-safe washing techniques that restore freshness and vibrancy to your rugs.
                                    </p>
                                    <p><i class="fa fa-check text-success me-3"></i>Eco-Friendly Cleaning Solutions</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Odor & Stain Removal</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Fast Drying Process</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Custom Sizes & Unique Carpet Designs</h3>
                                    <p class="mb-4">We offer tailor-made carpets in any shape, size, or pattern — from
                                        traditional hand-knotted styles to modern printed designs.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Made-to-Order Rugs</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Color & Material Options</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Interior Matching Designs</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Expert Carpet Repair & Resizing</h3>
                                    <p class="mb-4">From frayed edges to faded patches, our repair team restores your
                                        carpets to their original charm using traditional and modern techniques.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Edge Binding & Fringe Repair</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Color Matching & Restoration</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Custom Cutting & Resizing</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Fast & Safe Nationwide Delivery</h3>
                                    <p class="mb-4">We ship carpets securely across India and internationally, with
                                        protective packaging and on-time delivery for all orders.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Secure Packaging</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Doorstep Delivery</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Tracking & Support</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sarah Malik</h5>
                    <p>Interior Designer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">The hand-woven carpet I purchased brought warmth and elegance to my client’s
                            space. The quality is truly outstanding!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jack</h5>
                    <p>Hotel Owner</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">We added luxury carpets to all our suites, and our guests have been raving about
                            the comfort and look. Highly recommended!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Emily Ross</h5>
                    <p>Homeowner</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I absolutely love my new Persian carpet! It transformed my living room
                            completely. The design and texture are perfect.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Isabella Moretti</h5>
                    <p>Office Manager</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">We replaced our old rugs with premium carpets from here, and the office looks
                            more professional and inviting than ever before.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer -->

    <?php include('footer.php') ?>