<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsotne's personal portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>



<!-- custom cursors  -->
<div class="cursor-1"></div>
<div class="cursor-2"></div>


<div id="menu-bars" class="fas fa-bars"></div>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"> <span>Tsotne</span> Muzashvili </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#service">service</a>
        <a href="#experience">experience</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="https://www.facebook.com/profile.php?id=100080290127188" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/SatoshiN1995" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/satoshin1995/" class="fab fa-instagram"></a>
        <a href="https://github.com/TsotneMuzashvili" class="fab fa-github"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span class="hi"> hi there... </span>
        <h3> i am Tsotne Muzashvili </h3>
        <p class="info"> i am a Web Developer </p>
        <p class="text"> Hello, I am Tsotne Muzashvili 16 years old Web Developer from Georgia. I Love Coding and i want to go out and see world with my Web Development Skills! </p>
        <a href="#about" class="btn">about me</a>
    </div>

    <div class="image">
        <img src="images/noimage.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> about <span> me </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="images/noimage.jpg" alt="">
    </div>

    <div class="content">
        <h3> my name is Tsotne Muzashvili & i am a Web developer </h3>
        <p>I'am Tsotne Muzashvili Web Developer, from Georgia. And I LOVE CODING!</p>
        <div class="box-container">
            <div class="box">
                <p> <span> age : </span> 16 </p>
                <p> <span> gender : </span> male </p>
                <p> <span> language : </span> GEORGIAN, ENGLISH, RUSIAN </p>
                <p> <span> work : </span> Web Developer </p>
            </div>
            <div class="box">
                <p> <span> freelance : </span> available </p>
                <p> <span> phone : </span> +995 599 37 96 99 </p>
                <p> <span> email : </span> muzashvilitsotne@gmail.com </p>
                <p> <span> country : </span> Georgia </p>
            </div>
        </div>
        <a href="#" class="btn">download CV (no CV at this moment)</a>

        <br>

        <a href="https://www.fiverr.com/satoshinakamato/desigen-and-build-website" class="btn">hire me</a>
    </div>

</div>

<h1 class="heading"> <span> my </span> skills </h1>

<div class="row-2">

    <div class="skills">
        <div class="progress">
            <h3> HTML <span> 100% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> CSS <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> JS <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> React <span> 50% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> PHP <span> 75% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
        <div class="progress">
            <h3> Laravel <span> 80% </span> </h3>
            <div class="bar"> <span></span> </div>
        </div>
    </div>

    <div class="box-container">

        <div class="box">
            <h3> >> 2+ </h3>
            <p>years of experience</p>
        </div>
        <div class="box">
            <h3> >> 25+ </h3>
            <p>happy clients</p>
        </div>
        <div class="box">
            <h3> >> 30+ </h3>
            <p>projects completed</p>
        </div>
        <div class="box">
            <h3> >> 0+ </h3>
            <p>awards won</p>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

<h1 class="heading"> <span> my </span> services </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>I will develope website for you.</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>I will design website for you.</p>
        </div>

        <div class="box">
            <i class="fas fa-mobile"></i>
            <h3>responsive design</h3>
            <p>All my website will be responsive.</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>seo friendly</h3>
            <p>All my website will be responsive seo friendly</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- experience section starts  -->

<section class="experience" id="experience">

    <h1 class="heading"> <span> my </span> experience </h1>

    <div class="box-container">

        <div class="box">
            <div class="content">
                <span> 2014 - 2015 </span>
                <h3>Basic front-end development</h3>
                <p>I started learning HTML CSS and JS</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2016 - 2017 </span>
                <h3>Advanced front-end development</h3>
                <p>I started learning React and Bootstrap</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2017 - 2018 </span>
                <h3>back-end development</h3>
                <p>Started learning PHP and MYSQL.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2018 - 2019 </span>
                <h3>Advanced back-end development</h3>
                <p>Started learning Laravel.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2019 - 2020 </span>
                <h3>front-end projects</h3>
                <p>Started creating front-end projects for exaple facebook clone and more...</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span> 2020 - 2021 </span>
                <h3>back-end projects</h3>
                <p>Started creating back-end projects for exaple E-commerce website, shoping cart, login system, social media apps and more...</p>
            </div>
        </div>

    </div>

</section>

<!-- experience section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> my </span> portfolio </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Facebook Clone.png" alt="">
            <h3> Facebook Clone </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/Twitter Clone.png" alt="">
            <h3> Twitter Clone </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/Weather App.jpg" alt="">
            <h3> Weather App </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/Stopwatch.webp" alt="">
            <h3> Stopwatch </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/Quiz App.png" alt="">
            <h3> Quiz App </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/Password Generator.png" alt="">
            <h3> Password Generator </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/Online Education PHP.png" alt="">
            <h3> Online Education PHP </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/One-Healt.png" alt="">
            <h3> One Healt PHP </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/E-Commerce.jpg" alt="">
            <h3> E-Commerce Laravel </h3>
            <div class="icons">
                <a href="#" class="fas fa-link"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-search"></a>
            </div>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>my email</h3>
            <p>snakamato1@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>my number</h3>
            <p>+995 599 37 96 99</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>Georgia, Rustavi</p>
        </div>

    </div>

    <div class="row">

        <form action="" method="POST">

            <input type="text" name="name" placeholder="name" class="box">
            <input type="email" name="email" placeholder="email" class="box">
            <input type="number" name="number" placeholder="number" class="box">

            <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>

            <input type="submit" name="send" class="btn" value="send message">

        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95578.85425985268!2d44.95025893423397!3d41.52942374789553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404401a12359047b%3A0x920e6898a197d475!2sRustavi!5e0!3m2!1sen!2sge!4v1659207491386!5m2!1sen!2sge" allowfullscreen="" loading="lazy"></iframe>

    </div>


</section>

<!-- contact section ends -->

<!-- footer section  -->
<footer class="footer"> created by <span> Tsotne Muzashvili </span> | all rights reserved! </footer>






















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>