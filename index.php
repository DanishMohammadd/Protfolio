<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="1.jpg" alt="">
        <h3 class="name">md danish</h3>
        <p class="post">web developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">skills</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>md danish</span></h1>
    <p> I'M a Web Developer and Programmer from Muzaffarpur, India.I have completed MCA from Dr APJ ABDUL KALAM TECHNICAL UNIVERSITY.
    I make Web Application usually with PHP and MySQL...</p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> md danish </h3>
        <h3> <span> age : </span> 24 </h3>
        <h3> <span> qualification : </span> MCA </h3>
        <h3> <span> post : </span> web developer </h3>
        <h3> <span> language : </span> english </h3>
        <a href="Resume_Danish01.pdf"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>0.6</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>4+</span>
            <h3>porject completed</h3>
        </div>

      <!--  <div class="box">
            <span>430+</span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span>12+</span>
            <h3>awards won</h3>
        </div>-->

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

<div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><b>HSC</b></span>
        <p>Passed from Pristine Childrens High School, Muzaffarpur.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><b>SSC</b></span>
        <p>Passed from Pristine Childrens High School, Muzaffarpur.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><b>BCA</b></span>
        <!--<h3>BCA</h3>-->
        <p>Completed BCA from RAM KRISHNA DARMANTH FOUNDATION UNIVERSITY, BHOPAL.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><b>MCA</b></span>
        <p>COMPLETED MCA from DR APJ ABDUL KALAM TECHNICAL UNIVERSITY, LUCKNOW.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span><b>INTERNSHIP</b></span>
        <p>PHP WEB DEVELOPMENT from CEPTA INFOTECH, NOIDA.</p>
    </div>
  
</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>skills</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="HTML5.png" alt="">
    </div>

    <div class="box">
        <img src="CSS3.png" alt="">
    </div>

    <div class="box">
        <img src="javascript.png" alt="">
    </div>

    <div class="box">
        <img src="Bootstrap.png" alt="">
    </div>

    <div class="box">
        <img src="php.png" alt="">
    </div>

    <div class="box">
        <img src="mysql.png" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> Danishmohammadd6@Gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> 8340227424 </h3>
            <h3> <i class="fas fa-phone"></i> 8292877299 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> muzaffarpur, india - 842001. </h3>
        </div>

    </div>

    <form action="db.php"   method="post">

        <input name="name" type="text" placeholder="name" class="box">
        <input name="email" type="email" placeholder="email" class="box">
        <input name="project" type="text" placeholder="project" class="box">
        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>


</body>
</html>