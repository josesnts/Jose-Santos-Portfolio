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
                <li class="nav-item animate__animated animate__bounceIn">
                <a class="nav-link active text-dark bg-light rounded-pill px-4" aria-current="page" href="about.php">
                    <b>
                        About
                    </b>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light px-4" href="Skills.php">Skills</a>
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
        <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="images/Jose-About-Image.png" alt="Jose Display Image" class="w-50 mt-5 border border-5 border-success rounded-circle animate__animated animate__fadeIn">
        </div>
        <div class="col-md-6 text-light mt-5 p-5 d-flex justify-content-center flex-column animate__animated animate__fadeIn">

        <h3>
            <p>
                <b>
                    Personal Information
                </b>
            </p>
        </h3>

            <p>
                <b>
                    Name:
                </b>

                Jose Antonio Santos

            </p>

            <p>
                <b>
                    Birthdate:
                </b>

                June 19, 2002

            </p>

            <p>
                <b>
                    Location:
                </b>

                Biñan, Laguna

            </p>

    <br>

    <h3>
        <p>
            <b>
                Educational Attainment
            </b>
        </p>
    </h3>

        <div>
            <p>
                <b>
                    Primary Education:
                </b>

                Center for Excellence (CENTEX) - Manila 

            </p>

            <p>
                <b>
                    Junior Secondary Education:
                </b>

                Saint Michael's College of Laguna

            </p>

            <p>
                <b>
                    Senior Secondary Education:
                </b>

                AMA Computer College - Biñan Campus

            </p>

            <p>
                <b>
                    Tertiary Education:
                </b>

                Technological University of the Phillipines - Manila Campus

            </p>

    <br>

    <h3>
        <p>
            <b>
                Work Experience
            </b>
        </p>
    </h3>

    
             <p>
                <b>
                    JAGE Digital Marketing Solutions
                </b>

                (Graphic Designer) - <i>2021</i>

                <ul>
                    <li>
                    Creating social media poster and video advertisements for various clients.
                    </li>

                    <li>
                    Designing businesses logos and packaging labels for their products.
                    </li>

                    <li>
                    Produce mockups for brands products.
                    </li>

                </ul>

            </p>

            <br>
            
            <p>
                <b>
                    Bill Gosling Outsourcing
                </b>

                (Customer Service Specialist) - <i>2023 - Present</i>

                <ul>
                    <li>
                    Answer customer queries and concerns regarding the client’s offered services.
                    </li>

                    <li>
                    Flag technical issues and problems experienced by both customers and administrators.
                    </li>

                    <li>    
                    Review and validate customers’ documents for reimbursement application and pay out purposes.
                    </li>

                    <li>
                    Give solutions to both technical and non-technical issues of customers regarding the client’s offered services
                    </li>
                </ul>

            </p>


        </div>
        
        </div>
        </div>
        

    <!-- Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>