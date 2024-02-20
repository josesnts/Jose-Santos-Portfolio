<!-- 
    Project Title: Personal Portfolio Website
    Developed by: Jose Antonio R. Santos
    Date: July 22, 2023 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "functions/header.php"?>
</head>
<body class="body overflow-x-hidden">

    <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            
            <?php include "functions/navbar.php"?>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="skills.php">Skills</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-dark bg-light rounded-pill px-4 animate__animated animate__bounceIn" aria-current="page" href="portfolio.php">
                    <b>
                        Portfolio
                    </b>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="contact.php">Contact</a>
                </li>
            </ul>
            </div>

        </div>
        </nav>

        <h1 class="mt-5 text-light unbounded text-center my-3" id="graphic">
            <b>
                Graphic Designs
            </b>
        </h1>

        <div class="row m-5">
            <div class="col-md-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3">
                    <b>
                        Advertisement Posters
                    </b>
                </h5>
                <div id="carouselAdvertisementPoster" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="10" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="11" aria-label="Slide 12"></button>
                    <button type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide-to="12" aria-label="Slide 13"></button>
                </div>
                <div class="carousel-inner p-3">
                    <div class="carousel-item active" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-1.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-2.jpg" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-3.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-4.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-5.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-6.jpg" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-7.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-8.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-9.jpg" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-10.jpg" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-11.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-12.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/advertisementPosters/Advertisement-Poster-13.jpg" class="rounded d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAdvertisementPoster" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3 ">
                    <b>
                        Logo
                    </b>
                </h5>
                <div id="carouselLogo" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselLogo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselLogo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselLogo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselLogo" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselLogo" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselLogo" data-bs-slide-to="5" aria-label="Slide 6"></button>
    
                </div>
                <div class="carousel-inner p-3">
                    <div class="carousel-item active" data-bs-interval="4000">
                    <img src="images/logo/Logo-1.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/logo/Logo-2.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/logo/Logo-3.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/logo/Logo-4.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/logo/Logo-5.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/logo/Logo-6.png" class="rounded d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselLogo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselLogo" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3">
                    <b>
                        Product Packaging
                    </b>
                </h5>
                <div id="carouselProductPackaging" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselProductPackaging" data-bs-slide-to="6" aria-label="Slide 7"></button>
                </div>

                <div class="carousel-inner p-3">
                    <div class="carousel-item active" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-1.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-2.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-3.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-4.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-5.png" class="rounded d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-6.png" class="rounded d-block w-100" alt="...">
                    </div>
                    
                    <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/productPackaging/Product-Packaging-7.png" class="rounded d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductPackaging" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselProductPackaging" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

            <div class="col-md-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3">
                    <b>
                        Video Advertisements
                    </b>
                </h5>

                <br> <br> 

                <div id="carouselVideoAdvertisement" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselVideoAdvertisement" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselVideoAdvertisement" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselVideoAdvertisement" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner p-3">
                    <div class="carousel-item active">
                    <video class="img-fluid" controls>
                        <source src="videos/videoAdvertisement/Video-Advertisement-1.mp4" type="video/mp4" />
                    </video>
                    </div>

                    <div class="carousel-item">
                    <video class="img-fluid" controls>
                        <source src="videos/videoAdvertisement/Video-Advertisement-2.mp4" type="video/mp4" />
                    </video>
                    </div>

                    <div class="carousel-item">
                    <video class="img-fluid" controls>
                        <source src="videos/videoAdvertisement/Video-Advertisement-3.mp4" type="video/mp4" />
                    </video>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideoAdvertisement" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselVideoAdvertisement" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

        <hr>

        <h1 class="text-light unbounded text-center my-3" id="animation">
            <b>
                Animations
            </b>
        </h1>

        <div class="row">

            <div class="col-md-4 p-3">

                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b>
                        TV Appearance
                    </b>
                </h5>

                <video class="img-fluid" controls>
                    <source src="videos/animations/Animation-1.mp4" type="video/mp4" />
                </video>  
            </div>

            <div class="col-md-4 p-3">

                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b>
                        Pepito Manaloto Animation
                    </b>
                </h5>

                <video class="img-fluid" controls>
                    <source src="videos/animations/Animation-2.mp4" type="video/mp4" />
                </video>                
            </div>

            <div class="col-md-4 p-3">

                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b>
                        Simple Meme Animation
                    </b>
                </h5>

                <video class="img-fluid" controls>
                    <source src="videos/animations/Animation-3.mp4" type="video/mp4" />
                </video>         
            </div>
        </div>

        <hr>

        <h1 class="text-light unbounded text-center my-3" id="programming">
            <b>
                System Programs
            </b>
        </h1>

            <div class="row">
                <div class="col-md-4 p-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b>
                       COS Cart: Online E-Commerce Website and Inventory System 
                    </b>
                </h5>
                    <img src="images/programming/Program-1.png" alt="" class="rounded d-block w-100">

                    <p class="text-light text-center mt-3">
                        <i>
                            Programming Language: PHP and MySQL
                        </i>
                    </p>
                </div>

                <div class="col-md-4 p-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b> 
                       PUHON TUPian: iOS-based Mobile E-Commerce Application
                    </b>
                </h5>
                    <img src="images/programming/Program-2.png" alt="" class="rounded d-block w-100">

                    <p class="text-light text-center mt-3">
                        <i>
                            Programming Language: Swift
                        </i>
                    </p>
                </div>

                <div class="col-md-4 p-3">
                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b>
                       Console-based Bus Ticketing and Reservation System 
                    </b>
                </h5>
                    <img src="images/programming/Program-3.png" alt="" class="rounded d-block w-100">

                    <p class="text-light text-center mt-3">
                        <i>
                            Programming Language: C++
                        </i>
                    </p>

                </div>
            </div>

            <hr>

            <h1 class="text-light unbounded text-center my-3" id="uiux">
            <b>
                UI/UX Design
            </b>
        </h1>

            <div class="row">

                <h5 class="text-light text-center border-top border-bottom border-4 p-3 mb-3">
                    <b>
                       PUHON TUPian: E-Commerce Website UI/UX Design
                    </b>
                </h5>

                <div class="col-md-4 p-3">
                    <img src="images/uiux/UIUXDesign-1.png" alt="" class="rounded d-block w-100">
                </div>

                <div class="col-md-4 p-3">
                    <img src="images/uiux/UIUXDesign-2.png" alt="" class="rounded d-block w-100">
                </div>

                <div class="col-md-4 p-3">
                    <img src="images/uiux/UIUXDesign-3.png" alt="" class="rounded d-block w-100">
                </div>
            </div>

        </div>

    <!-- Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>