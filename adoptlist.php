<?php
// Include database connection
include('db.php');

// Fetch adoption data from the database
$query = "SELECT * FROM pet_adoptions";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PalHome</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/adoptlist.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>PalHome</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="adoptlist.html" class="nav-item nav-link active">Adopt</a>
                <a href="missinglist.html" class="nav-item nav-link">Missing</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Post</a>
                        <a href="about.html" class="dropdown-item">About</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Post Adoption</h6>
                <h1 class="display-5 text-uppercase mb-0">Pet Adoption - Post Form</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <div>
                            <a class="nav-link " href="adoptionform.html">Post Pet Adoption</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Pet Adoption</h6>
            <h1 class="display-5 text-uppercase mb-0">CATS & DOGS</h1>
        </div>
        <div class="row g-5">
            <!-- PHP Code to loop through pet adoption data -->
            <div class="col-lg-8">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="blog-item mb-5">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/blog-1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i><?php echo $row['organization']; ?></small>
                                        <small><i class="bi bi-calendar-date me-2"></i>Date Posted: <?php echo $row['date_posted']; ?></small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">Name: <?php echo $row['name']; ?> <br>Species: <?php echo $row['species']; ?> <br>Age: <?php echo $row['age']; ?> yrs old</h5>
                                    <p><?php echo $row['description']; ?></p>
                                    <a class="text-primary text-uppercase" href="#">Read More<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Block 4, 12th Jemo Str. Gusa, Cagayan de Oro City, Misamis Oriental, Philippines.</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>hrservice@palhome.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+888-125479</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="adoptlist.html"><i class="bi bi-arrow-right text-primary me-2"></i>Adopt Pets</a>
                        <a class="text-body mb-2" href="missinglist.html"><i class="bi bi-arrow-right text-primary me-2"></i>Missing Pets</a>
                        <a class="text-body mb-2" href="team.html"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Partners</a>
                        <a class="text-body mb-2" href="service.html"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                        <a class="text-body" href="contact.html"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"> </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Your Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>