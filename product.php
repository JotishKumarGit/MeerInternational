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

    <?php include('header.php'); ?>

    <div class="pt-5 text-center align-items-center justify-content-center">
        <h2 class="text-dark ">All Products</h2>
    </div>

    <!-- This is section  -->
    <section class="py-5">
        <div class="container">
            <div class="row py-5 px-4 justify-content-center align-items-center shadow-lg">
                <?php
                include('config.php');

                // 1. Check if category ID is provided 
                if (!isset($_GET['category_id'])) {
                    echo "<p class='text-danger'>Category not specified.</p>";
                    exit;
                }

                $category_id = intval($_GET['category_id']);

                // 2. Fetch products based on category
                $query = "SELECT * FROM products WHERE category_id = $category_id";
                $result = mysqli_query($con, $query);

                if (!$result || mysqli_num_rows($result) == 0) {
                    echo "<p class='text-warning'>No products found in this category.</p>";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <!-- Product Card Start -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100 shadow-lg">
                                <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>"
                                    style="height: 250px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <div>
                                        <a href="#" class="btn btn-outline-secondary mb-2 fw-bold text-dark border-2"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Enquiry
                                        </a>
                                        <a href="singlePage.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Card End -->
                        <?php
                    }
                }
                mysqli_close($con);
                ?>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>