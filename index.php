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

    <!-- Header -->
    <?php include('header.php'); ?>
    <!-- header end -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Carpets_1.jpeg" height="600px" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Premium Carpets
                                        //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Luxurious
                                        Handcrafted Rugs for Every Home</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Explore
                                        Collection<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/Carpets_1.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="img/Carpets_2.jpeg" height="600px" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Carpet Cleaning
                                        //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Professional Rug
                                        Cleaning & Restoration</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Book Service<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/Carpets_2.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-layer-group fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Premium Carpet Materials</h5>
                            <p>We use high-quality wool, silk, and jute to ensure lasting durability and luxury feel.
                            </p>
                            <a class="text-secondary border-bottom" href="">Explore Materials</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-palette fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Custom Designs & Patterns</h5>
                            <p>Choose from a wide range of traditional, modern, or bespoke carpet designs tailored to
                                your space.</p>
                            <a class="text-secondary border-bottom" href="">View Designs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-shipping-fast fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Nationwide Delivery</h5>
                            <p>Fast and secure delivery of carpets right to your doorstep, anywhere in the country.</p>
                            <a class="text-secondary border-bottom" href="">Delivery Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/Carpets_3.jpeg"
                            style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">Meer international</span> Is The Best Place For Your
                        Auto Care
                    </h1>
                    <p class="mb-4">"At Arif Carpets, we bring tradition and craftsmanship together to create elegant,
                        handwoven rugs and carpets. From classic Persian styles to modern minimalist designs, each piece
                        is crafted with care using premium materials. Whether you're furnishing a home or office, our
                        carpets add warmth, style, and timeless beauty to any space."
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Experienced team delivering precision in every detail.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>Trusted care and maintenance for all types of carpets.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span> Skilled artisans recognized for excellence in craftsmanship.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Carpets_4.jpeg"
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
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Carpets_5.jpeg"
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
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Carpets_6.jpeg"
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
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/Carpets_7.jpeg"
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

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Carpet Orders //</h5>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Product Inquiries //</h5>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// After-Sales Support //</h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7007.118077643412!2d77.24280968959073!3d28.58300132406042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20H%20No.%20153%20Masjid%20Lane%20Bhogal%20Extension%20R%20Nnew%20-%20110014%2C%20Jangpura%2C%20Delhi%2C%20India!5e0!3m2!1sen!2sin!4v1754974141149!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">
                            We'd love to hear from you! Whether you're looking for custom carpet solutions, product
                            details, or need support, simply reach out through the form below. Our team will respond
                            promptly to assist you.
                        </p>
                        <form onsubmit="sendToWhatsApp(); return false;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            name="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include('footer.php') ?>