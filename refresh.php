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


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <form method="post">
                                <select name="hobby" class="form-select border-0 py-3">
                                    <option selected>În baza hobby-urilor</option>
                                    <?php
                                    $conn = mysqli_connect("localhost", "root", "", "php_app");

                                    $hobbies = mysqli_query($conn, "SELECT DISTINCT hobby FROM posts");

                                    while ($hobby = mysqli_fetch_assoc($hobbies)) {
                                        echo '<option value="' . $hobby['hobby'] . '">' . $hobby['hobby'] . '</option>';
                                    }
                                    ?>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <select name="culinara" class="form-select border-0 py-3">
                                <option selected>În baza preferintelor culinare</option>
                                <?php
                                $culinarapref = mysqli_query($conn, "SELECT DISTINCT culinara FROM posts");

                                while ($culinara = mysqli_fetch_assoc($culinarapref)) {
                                    echo '<option value="' . $culinara['culinara'] . '">' . $culinara['culinara'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="localitate" class="form-select border-0 py-3">
                                <option selected>Localitate</option>
                                <?php
                                $localitatepref = mysqli_query($conn, "SELECT DISTINCT localitate FROM posts");

                                while ($localitate = mysqli_fetch_assoc($localitatepref)) {
                                    echo '<option value="' . $localitate['localitate'] . '">' . $localitate['localitate'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="submit" class="btn btn-dark border-0 w-100 py-3">Cauta</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Search End -->
    <?php

    // check if the form has been submitted
    if (isset($_POST['submit'])) {
        // get the form values
        $hobby = $_POST['hobby'];
        $culinara = $_POST['culinara'];
        $localitate = $_POST['localitate'];

        // establish a database connection
        $conn = mysqli_connect("localhost", "root", "", "php_app");

        // search the database based on the form values
        $query = mysqli_query($conn, "SELECT * FROM posts WHERE hobby='$hobby' AND culinara='$culinara' AND localitate='$localitate'");
    }
    echo '<div class="container-xxl py-1">';
    // check if the form has been submitted and there are rows in the result set
    if (isset($_POST['submit']) && mysqli_num_rows($query) > 0) {
        // output the data for each row
        echo "_____________________________________________________" . "<br>";
        while ($row = mysqli_fetch_assoc($query)) {
            echo "Denumirea pensiunii: " . $row['denumirea'] . "&nbsp|&nbsp". $row['pretul'] . "MDL" . "<br>";
            echo "_____________________________________________________" . "<br>";
        }
    }
    ?>

    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="alert alert-success" role="alert">
            Modificarile au fost facute!
        </div>

        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Alege o pensiune</h1>
                        <p> Avem o grămadă de pensiuni care sunt la dispoziția dvs!</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">De vara</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">De toamna</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">De Primavara</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php include ('./db/config.php'); ?>
            <?php
            $query = mysqli_query($sql, "SELECT * FROM posts ORDER BY id DESC");
            while($row = mysqli_fetch_assoc($query)){
                $id = $row['id'];
                $denumirea = $row['denumirea'];
                $imagine = $row['imagine'];
                $tipul = $row['tipul'];
                $culinara = $row['culinara'];
                $hobby = $row['hobby'];
                $localitate = $row['localitate'];
                $pretul = $row['pretul'];
            }?>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php foreach($query as $value){?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="<?php echo $value['imagine'] ?>" alt="<?php echo $value['denumirea'] ?>"></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?php echo $value['tipul'] ?></div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"><?php echo $value['pretul'] ?>&nbsp<span>MDL</span></h5>
                                        <a class="d-block h5 mb-2" href=""><?php echo $value['denumirea'] ?></a>
                                    </div>
                                    <div class="d-flex p-3 bd-highlight">
                                        <form action="EditPost.php?id=<?php echo $value['id']; ?>" method="post" enctype="multipart/form-data">
                                            <button type="submit" value="STERGERE" name="submit" class="btn btn-primary btn-sm mx-1">Editare</button>
                                        </form>
                                        <form action="delete.php?id=<?php echo $value['id']; ?>" method="post" enctype="multipart/form-data">
                                            <button type="submit" value="STERGERE" name="submit" class="btn btn-danger btn-sm mx-1">Stergere</button>
                                        </form>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><span>Culinarie: </span><?php echo $value['culinara'] ?></small>
                                        <small class="flex-fill text-center border-end py-2"><span>Hobby: </span><?php echo $value['hobby'] ?></small>
                                        <small class="flex-fill text-center py-2"><span>Locatie: </span><?php echo $value['localitate'] ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary py-3 px-5" href="">Afiseaza mai multe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Păreri de la clientii noștri!</h1>
                <p>Părerea clientilor noștri este foarte importantă.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Am avut o ședere minunată la această pensiune! Camerele sunt curate și confortabile, iar personalul este foarte amabil și serviabil. Am apreciat în mod special micul dejun bogat și diversificat, care ne-a încântat papilele gustative în fiecare dimineață. </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Alina</h6>
                                <small>Project Mananger</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Am avut o experiență minunată la această pensiune! Camerele sunt moderne și confortabile, iar personalul a fost foarte amabil și serviabil. De asemenea, am apreciat mult locația, aproape de atracțiile turistice principale. Voi recomanda cu încredere această pensiune altor prieteni.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Grigore</h6>
                                <small>Culturist</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>Am stat la această pensiune pentru o noapte și a fost o alegere excelentă. Camerele sunt curate și spațioase, iar micul dejun a fost delicios. De asemenea, am apreciat în mod special piscina și grădina frumoase, care ne-au oferit un loc relaxant pentru a ne bucura de soarele cald. Voi reveni cu siguranță aici data viitoare când voi călători în zonă.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Vasile</h6>
                                <small>Php Developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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