<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pensiuni Moldova</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Incarcare...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">Pensiuni Moldova</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link active">Acasa</a>
                    <a href="contact.php" class="nav-item nav-link">Contacteaza-ne</a>
                </div>
                <a href="add.php" class="btn btn-primary px-3 d-none d-lg-flex">Adauga o pensiune</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Caută <span class="text-primary">o pensiune</span> Pentru toata Familia!</h1>
                <p class="animated fadeIn mb-4 pb-2">Relaxeaza-te intr-o pensiune la aer curat in Republica Moldova!</p>
                <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Rezervează acum!</a>
            </div>
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container-xxl py-5">
        <h1 class="mb-3">Adaugare pensiune</h1>
        <div class="mb-3">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <label for="denumirea" class="form-label">Denumirea pensiunii</label>
                <input name="denumirea" class="form-control" id="denumirea" placeholder="Adauga denumirea pensiunii">
        </div>

        <div class="mb-3">
            <label for="imagine" class="form-label">Imaginea pensiunii</label>
            <input name="imagine" class="form-control" id="imagine" placeholder="Link-ul de la imaginea pensiunii">
        </div>

        <div class="mb-3">
            <label for="tipul" class="form-label">Tip pensiune</label>
            <input name="tipul" class="form-control" id="tipul" placeholder="Tipul pensiunii">
        </div>

        <div class="mb-3">
            <label for="culinara" class="form-label">In baza culinara</label>
            <input name="culinara" class="form-control" id="culinara" placeholder="Adauga tipul de culinarie">
        </div>

        <div class="mb-3">
            <label for="hobby" class="form-label">In baza hobby-urilor</label>
            <input name="hobby" class="form-control" id="hobby" placeholder="Adauga tipul de hobby">
        </div>

        <div class="mb-3">
            <label for="localitate" class="form-label">Localitatea pensiunii</label>
            <input name="localitate" class="form-control" id="localitate" placeholder="Adauga localitatea pensiunii">
        </div>

        <div class="mb-3">
            <label for="pretul" class="form-label">Pretul</label>
            <input name="pretul" class="form-control" id="pretul" placeholder="Adauga pretul pensiunii">
        </div>

        <button type="submit" value="INCARCA DATELE" name="submit" class="btn btn-primary mb-3">Incarca datele</button>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Ne găsești</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>str.studentilor 7/1</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Link-uri utile</h5>
                    <a class="btn btn-link text-white-50" href="">Acasa</a>
                    <a class="btn btn-link text-white-50" href="">Alege o pensiune</a>
                    <a class="btn btn-link text-white-50" href="">Contacteaza-ne</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Galerie foto</h5>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Noutati</h5>
                    <p>Aboneaza-te pentru a afla mai multe noutati.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Inregistreaza-te</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Pensiuni Moldova</a>, Toate drepturile rezervate.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Acasa</a>
                            <a href="">Alege o pensiune</a>
                            <a href="">Contacteaza-ne</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>