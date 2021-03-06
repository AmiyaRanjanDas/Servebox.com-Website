<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServeBox.com</title>
    <script src="zod.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/logo6.png" alt="my logo">
        </div>
        <ul>
            <li class="item"><a  href="#home"><span></span>Home</a></li>
            <li class="item"><a href="#service"><span></span>Services</a></li>
            <li class="item"><a href="#aboutus"><span></span>About</a></li>
            <li class="item"><a href="#contactus"><span></span>Contact</a></li>
            <li id="item" style="margin-left: 5px;"><a href="loginas.html"><span></span>login</a></li>
            <li id="item" style="margin-left:10px;"><a href="regas.html"><span></span>Register</a></li>  
        </ul>
        <br>
    </nav>
    <br>
    <section id="home" >
        <h1 class="h1" style="text-align: center;">Welcome to Best all type of Service in India</h1>
        <h2 style="text-align: center;">SERVEBOX.COM</h2><br>
        <p style="text-align: center;">Lorem, ipsum dor adipisicing elit. Ab debitis laborum aliquid vel dolore illum.</p>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto eveniet, ducimus vitae officia beatae</p>          
    </section>
    <div style="display:flex; background-color:rgba(0,0,0,0.2); padding:20px; text-allign:center;justify-content: space-between;">
    <div>
        <a style="text-align: center; padding:8px 26px; Font-size:18px; width:580px; background-color:red;
         color:white; font-weight:600; cursor:pointer; border:2px solid black ;font-family: Arial;text-decoration: none;"
         href="index.html" ># <?php echo $_SESSION['username']; ?></a>


        <!-- <h1 style=" font-family: Arial;">Hello <span style="color:Blue;font-family: Arial;"><?php echo $_SESSION['username']; ?><span></h1> -->
    </div>    
    <div style="margin:auto;">
        <a style="text-align: center; padding:8px 26px; Font-size:18px; width:580px; background-color:blue;
         color:white; font-weight:600; cursor:pointer; border:2px solid black ;font-family: Arial;text-decoration: none;"
         href="index.html" >Log out</a>
    </div>
    </div>
    <section id="service">
        <h1 class="primary">Services</h1>
            <div class="services12">
                <div class="box" style="text-align: center;">
                <img src="images/plumber.jpeg" alt="plumberphoto">
                <h2 style="text-align: center;" class="plumber">Plumber</h2>
                <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime veritatis vel ac</p>
                <br><a class="buton" href="plumber.html">Explore</a>
                </div>
                 <div class="box" style="text-align: center;">
                <img src="images/Electrician.jpeg" alt="Electricianphoto">
                <h2 style="text-align: center;" class="Electrician">Electrician</h2>
                <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime veritatis vel ac</p>
                <br><a class="buton" href="electrician.html">Explore</a>
                </div>
                 <div class="box" style="text-align: center;">
                <img src="images/Mechanics.jpeg" alt="mechanicphoto">
                <h2 style="text-align: center;" class="Mechanics">Mechanics</h2>
                <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime veritatis vel ac</p>
                <br><a class="buton" href="mechanics.html">Explore</a>
                </div>
            </div>
    </section>
    <br>
    <section id="aboutus">
        <h1 class="primary">About us</h1>
        <p style="font-size:25px; text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique mollitia quia ea, aliquam illum laudantium atque</p>
        <p style="font-size:25px; text-align: center;">Lorem ipsum doillum laudantium atque</p>
        <p style="font-size:25px; text-align: center;">Lorem ipsum dolor sit amet consem illum laudantium atque</p>
        <div>
        <img class="image2202" src="images/office1.jpg" style="height: 100px;width: auto;margin: 25px 20px; " alt="office photo">
        <img class="image2202" src="images/office.webp" style="height: 100px;width: auto;margin: 25px 20px; " alt="office photo">
        </div>
        <p style="font-size:25px; text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique mm illum laudantium atque</p>
        <p style="font-size:25px; text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique mollitia quia ea, aliquanbajd suygshwajs hs8wysgvhbawjs ugyvsshbxjnx shugyvxhsw bgswcsgvhsws iugytdrxchjnxx vswdfcsghbm illum laudantium atque</p>
    </section>
    <br><br>
    <section id="aboutus">
        <h1 class="primary">Collab With</h1>
        <img src="images/jaquar.jpg" alt="companyphoto">
        <img src="images/pipe.jpg" alt="companyphoto">
        <img src="images/bajaj.jpg" alt="companyphoto">
        <img src="images/havells.png" alt="companyphoto">
        <img src="images/tata.png" alt="companyphoto">
        <img src="images/kirloskar.jpg" alt="companyphoto">
        
        <p style="font-size:25px; text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique mollitia quia ea, aliquam illum laudantium atque</p>
    </section>
    <br><br>
    <footer style="background-color: rgb(105, 105, 105);">
    <section id="contactus" >
        <h1 class="primary">Contact us</h1>
        <p style="font-size:25px; text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique mollitia quia ea, aliquam illum laudantium atque</p>
    </section><br><br>
    <div style="text-align: center;">
        <h2>email</h2><h3>sdf@345</h3><br>
        <h2>Mobile</h2><h3>3456789034</h3><br>
        <h3 style="font-size:25px; text-align: center;">Social Media</h3>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
    </div>
</footer>
</body>
</html>
