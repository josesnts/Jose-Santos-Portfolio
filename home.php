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
                <a class="nav-link active text-dark bg-light rounded-pill px-4 animate__animated animate__bounceIn" aria-current="page" href="home.php">
                    <b>
                        Home
                    </b>
                </a>
                </li>
                <li class="nav-item navbarOption">
                <a class="nav-link text-light px-4" href="about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="skills.php">Skills</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="contact.php">Contact</a>
                </li>
            </ul>
            </div>

        </div>
        </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center d-flex justify-content-center align-items-center flex-column animate__animated animate__fadeIn">
                <h1 class="text-light unbounded">
                    Jose Antonio Santos
                </h1>
                <p class="text-light">
                    Graphic Designer | Animator | UI/UX Designer
                </p>
                <a href="Jose-Antonio-Santos-Resume.pdf" target="_blank" class="btn btn-success">Download CV</a>
            </div>

            <div class="col-md-6">
                <img src="images/Jose-Home-Pic.png" alt="Jose Home Image" class="w-100 mt-5 animate__animated animate__fadeIn"> 
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>