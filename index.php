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
<body class="body">
    <img src="images/Jose-Logo-Light.png" width="200px" class="position-absolute top-50 start-50 translate-middle">
    <script>
        var timer = setTimeout(function() {
            $("img").fadeOut('slow', function() {
            window.location.href = "home.php";
        });
        }, 1000);
    </script>
</body>
</html>