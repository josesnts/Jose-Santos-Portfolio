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
                <a class="nav-link text-light px-4" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-dark bg-light rounded-pill px-4 animate__animated animate__bounceIn" aria-current="page" href="contact.php">
                    <b>
                        Contact
                    </b>
                </a>
                </li>
            </ul>
            </div>

        </div>
        </nav>

        <div class="mt-5">
            <h1 class="text-light text-center">
                <b>
                    Contact Details
                </b>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                
            </div>

            <div class="col-md-6">
                
            </div>
            <section class="mt-3 text-center">
              <a href = "mailto: santosjoseantoniorogel@gmail.com" type="button" class="btn btn-outline-light w-75 p-3 text-dark my-3 bg-light"><h3 class="fas fa-envelope icons"> </h3> <br> santosjoseantoniorogel@gmail.com</a> 
              <a href = "tel: 0917-180-2163" type="button" class="btn btn-outline-light w-75 p-3 text-dark my-3 bg-light"><h3 class="fas fa-phone icons"> </h3> <br>  (+63) 917-180-2163</a> 
              <a href = "https://www.facebook.com/joseeeantoniosantos" target="_blank" type="button" class="btn btn-outline-light w-75 p-3 text-dark my-3 bg-light"><h3 class="fab fa-facebook icons"> </h3> <br> Visit my Facebook Page </a>
              <a href = "https://www.youtube.com/channel/UCur9fqUViemZTVCxzrR-FYg" target="_blank"type="button" class="btn btn-outline-light w-75 p-3 text-dark my-3 bg-light"><h3 class="fab fa-youtube icons"> </h3> <br>  Visit my Youtube Channel </a>
        </div>

    <!-- Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>