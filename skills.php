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
                <li class="nav-item animate__animated animate__bounceIn">
                <a class="nav-link active text-dark bg-light rounded-pill px-4" aria-current="page" href="skills.php">
                    <b>
                        Skills
                    </b>
                </a>
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

        <div class="text-light text-center mt-5">
        <h1 class="border-top border-bottom border-4 p-3">
            <b>
                Technical Skills
            </b>
        </h1>

            <div class="text-light">
               <div class="row">
                    <div class="col-md-3 p-5">
                        <div class="card border border-white border-5 w-100">
                        <img src="images/Graphic-Design-Display.png" class="card-img-top" alt="Graphic-Design-Display.png">
                        <div class="card-body">
                            <h5 class="card-title">
                                <b class="unbounded">
                                    Graphic Design
                                </b>
                            </h5>
                            <p class="card-text text-justify skills_details">Started offering freelance graphic design services since February 2021 for various clients which are intended to be posted on their social media accounts and pages for advertisement purposes.</p>
                            <p class="card-text">
                                <b>Software Applications:</b>
                                <div class="d-inline-flex justify-content-center">
                                    <img src="images/Photoshop-Icon.png" alt="Photoshop-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/Illustrator-Icon.png" alt="Illustrator-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/Premiere-Icon.png" alt="Premiere-Icon.png" class="img-fluid w-25 m-1">
                                </div>
                            </p>
                            <a href="Portfolio.php#graphic" class="btn btn-success w-100">View Graphic Designs</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-5">
                        <div class="card border border-white border-5 w-100">
                        <img src="images/Animation-Display.png" class="card-img-top" alt="Animation-Display.png">
                        <div class="card-body">
                            <h5 class="card-title">
                                <b class="unbounded">
                                    Animation
                                </b>
                            </h5>
                            <p class="card-text text-justify skills_details">Studied ICT Major in Animation and Visual Graphics in Senior Highschool and one my animations was previously featured in a TV program of GMA Network in July 2021.</p>
                            <p class="card-text">
                                <b>Software Applications:</b>
                                <div class="d-inline-flex justify-content-center">
                                <img src="images/Photoshop-Icon.png" alt="Photoshop-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/Animate-Icon.png" alt="Animate-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/Premiere-Icon.png" alt="Premiere-Icon.png" class="img-fluid w-25 m-1">
                                </div>
                            </p>
                            <a href="Portfolio.php#animation" class="btn btn-success w-100">View Animations</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-5">
                        <div class="card border border-white border-5 w-100">
                        <img src="images/Programming-Display.png" class="card-img-top" alt="Programming-Display.png">
                        <div class="card-body">
                            <h5 class="card-title word-wrap">
                                <b class="unbounded">
                                    Programming
                                </b>
                            </h5>
                            <p class="card-text text-justify skills_details">Acquire basic knowledge about various programming languages such as PHP, Swift, Javascript, C, and C++ as well as HTML, CSS, Bootstrap and MySQL for web development.</p>
                            <p class="card-text">
                                <b>Software Applications:</b>
                                <div class="d-inline-flex justify-content-center">
                                <img src="images/VS-Code-Icon.png" alt="VS-Code-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/XAMPP-Icon.png" alt="XAMPP-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/XCode-Icon.png" alt="XCode-Icon.png" class="img-fluid w-25 m-1">
                                </div>
                            </p>
                            <a href="Portfolio.php#programming" class="btn btn-success w-100">View Project Programs</a>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-5">
                    <div class="card border border-white border-5 w-100">
                        <img src="images/UI-UX-Design-Display.png" class="card-img-top" alt="UI-UX-Design-Display.png">
                        <div class="card-body">
                            <h5 class="card-title">
                                <b class="unbounded">
                                    UI/UX Design
                                </b>
                            </h5>
                            <p class="card-text text-justify skills_details">Produced several User Interface and User Experience Design projects using Figma for various applications such as personal portfolio, e-commerce website and mobile application, etc.</p>
                            <p class="card-text">
                                <b>Software Applications:</b>
                                <div class="d-inline-flex justify-content-center">
                                    <img src="images/Figma-Icon.png" alt="Figma-Icon.png" class="img-fluid w-25 m-1">
                                    <img src="images/Photoshop-Icon.png" alt="Photoshop-Icon.png" class="img-fluid w-25 m-1">
                                </div>
                            </p>
                            <a href="Portfolio.php#uiux" class="btn btn-success w-100">View UI/UX Designs</a>
                        </div>
                        </div>
                    </div>

               </div>
            </div>
        </div>

    <!-- Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>