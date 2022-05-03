<?php
session_start();

include("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<style>
    h1 {
        font-family: Georgia, "Times New Roman", Times, serif;
        background-color: rgba(0, 0, 0, 0.2);
        color: #ffffff;
    }
    h2 {
        font-family: cursive;
        background-color: rgba(0, 0, 0, 0.2);
        color: #ffffff;
    }
    h3 {
        font-size: 70px;
        background-color: rgb(1, 31, 252);
        color: #ffffff;
    }
    section {
        width: 100%;
        height: 95vh;
        background-image: url("media/rahul-bhogal-Ub9LkIWxyec-unsplash.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .text-container button:hover{
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
        border: 2px solid black;
    }
    .about-text button:hover{
        color: rgb(255, 255, 255);
        background-color: rgb(0, 0, 0);
        border: 2px solid black;
    }
    .about-container {
        width: 80%;
        height: 550px;
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 2px 2px 12px rgba (0, 0, 0, 0.2);
        display: flex;
        margin: 7% auto 20px auto;
        position: relative;
        justify-content: space-evenly;
        align-items: center;
    }
    .about-container img {
        height: 250px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>UNION BANK</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script><!----social icons---->
    
</head>
<body>
    <section>
        <!--navigation-->
            <nav>
            <!--logo-->
            <a href="#" class="logo">UNION BANK</a>
            <!--menu-->
            <ul>
                <li><button onclick="document.location='index.php'" class="active">Home</button></li>
                <li><button onclick="document.location='service.html'">Services</button></li>
                <li><button onclick="document.location='team.html'">Team</button></li>
                <li><button onclick="document.location='about.html'">About</button></li>
                <li><button onclick="document.location='contact.html'">Contact us</button></li>
                <li><button onclick="document.location='acc.php'">Accounts</button></li>
                
            </ul>
            </nav>
        <!--text-->
            <div class="text-container">
            <p>WELCOME TO</p>
            <p>THE UNION BANK</p>
            <p style="color: black;">BANK ANYTIME <br>ANYWHERE.</p>
        </div>
    </section>
    <!--about-section-->
    <div class="about-container">
    <!--image-->
        <img src="media/mathieu-stern-1zO4O3Z0UJA-unsplash.jpg">
    <!--about-text-->
        <div class="about-text">
        <p>UNION BANK</p>
        <p>Your life, your bank</p>
        <p>A diverse community is a strong community .<br>
            <h1><strong>Visit us. All are Welcomed.</strong></h1></p>
        <!---button-->
        
        </div>
    </div>

    
</body>
<footer>
    <!--logo-->
    <a href="#" class="logo">UNION BANK</a>
    <!---social icons-->
    <div class="social-icons">
        <a href="https://m.me/darrells.jaccuzzi"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/z_i.z.a/"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=254746370364&text=Hi,%20i%20am%20ziza"><i
                class="fab fa-whatsapp"></i></a>
        <a href="https://twitter.com/Zizah001"><i class="fab fa-twitter"></i></a>
    </div>Copyright &copy; 2022 UNION BANK<br>
    <a href="silateizizah@gmail.com"> Mail to:UNION BANK</a>
</footer>
</html>