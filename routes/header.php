<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAZHOE | Laundry Sepatu</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="../assets/logo1.png" type="image/x-icon">

    <?php
    // require functions.php file
require_once '../database/functions.php';
?>

</head>

<body>

    <!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p></p>
            <div class="font-rale font-size-14">
                <a href="../index.html" class="px-3 border-right border-left text-dark">Logout</a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand" href="#">WAZHOE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Treatment
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="product.php">Cuci bersih</a>
                            <a class="dropdown-item" href="product.php">Sepatu Kami</a>
                            <a class="dropdown-item" href="product.php">Bersih Bersih</a>
                            <!-- More categories here -->
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- !Primary Navigation -->

    </header>
    <!-- !start #header -->

    <!-- start #main-site -->
    <main id="main-site">