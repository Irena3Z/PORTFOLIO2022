<?php

include 'connect.php';

if(isset($_POST['submit2'])){
    $name = $_POST['name2'];
    $email = $_POST['email2'];
    $message = $_POST['message2'];

    $sql = "INSERT INTO communication_post (name, email, message)
             VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result ){
        echo "<script>alert('Message sent successfully.')</script>";
    } else{
        echo "<script>alert('Message does not send .')</script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/all.css">
   
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--------------Navigation---------->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Portfolio.</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                   <li class="nav-link">
                       <a href="#">Home</a>
                   </li> 
                   <li class="nav-link">
                    <a href="#about">About</a>
                </li> 
                <li class="nav-link">
                    <a href="#hobbies">Hobbies</a>
                </li> 
                <li class="nav-link">
                    <a href="#gallery">Gallery</a>
                </li> 
                <li class="nav-link">
                    <a href="#work">Work</a>
                </li> 
                <li class="nav-link">
                    <a href="#contact">Contact</a>
                </li> 
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/irena.3Bit/" target="_Blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/irena_3bit/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/irena-zbitkovska-88b473206/" target="_Blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/Irena3Z" target="_Blank"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </nav>

<!--------x------Navigation---x--------->

<!---------Main Site Section---------->
<main class="site-main">

<!---------Title---------->
<section class="site-title">
    <div class="site-background">
        <h3>Portfolio by</h3>
        <h1>Ir??na Zbitkovska</h1>
        <a href="#about"><button class="btn">Let's check</button></a>

    </div>
</section>
<!------x---Title----x------>

<!---------About---------->
<section id="about" class="site-about" >
    <div class="main_container">
    <div class="my_image">
        <img src="./assets/home/IMG_5369.JPEG" alt="my_image" >
    </div>
    <div class="about_me">
        <h2><b class="c-2">Hey </b>
             <b class="c-1">I' m Ir??na </b>
        </h2>
       
        <h4>Next Front-end Developer</h4>
        <p>I am currently working as a manager, serving legal clients. I believe I will work as a programmer tomorrow. 
            Each of us uses technology a lot every day, and so do I. But despite that, I really enjoy spending time in nature.. 
            I am very active, I enjoy both long walks and fishing. 
            In the summer I spend my holidays in a tent or on a long car trip.. But if it rains outside, I also have a passion at home. Then it's time to draw. I paint both portraits and landscapes. 
            Or spend time watching a new series..
        </p>
    </div>
    </div>
</section>
<!------x---About----x------>

<!---------Hobbies---------->
<section id="hobbies">
    <div class="blog">
        <div class="container">
            <h1>How do i spend my free time</h1>
            <div class="owl-carousel owl-theme blog-post">
                <div class="blog-content">
                    <img src="./assets/home/aus.jpg" alt="" width="350">
                    <div class="blog-title">
                        <h3>Trevel</h3>
                        <h5>I like to travel .. at the moment I have been to Germany, the Czech Republic, Austria, Poland, Lithuania and Estonia.</h5>
                    </div>
                </div>
                <div class="blog-content">
                    <img src="./assets/home/IMG_8508.JPG" alt="" width="350">
                    <div class="blog-title">
                        <h3>Photograph</h3>
                        <h5>You can enjoy a moment twice, the first time you're there, the second time you're looking at photos.</h5>
                    </div>
                </div>
                <div class="blog-content">
                    <img src="./assets/home/walking.jpg" alt="" width="350">
                    <div class="blog-title">
                        <h3>Walk</h3>
                        <h5>I like to spend my free time in nature. One night I walked even <b>50 km!</b> </h5>
                    </div>
                </div>
                <div class="blog-content">
                    <img src="./assets/home/color.jpg" alt="" width="300">
                    <div class="blog-title">
                        <h3>Draw</h3>
                        <h5>I spend my free time drawing. There will soon be no free space on the walls..</h5>
                    </div>
                </div>
                <div class="blog-content">
                    <img src="./assets/home/roler.jpg" alt="" width="350">
                    <div class="blog-title">
                        <h3>Rollerskating</h3>
                        <h5>These are my second shoes in my summer time</h5>
                    </div>
                </div>
                <div class="blog-content">
                    <img src="./assets/home/movie.jpg" alt="" width="300">
                    <div class="blog-title">
                        <h3>Cinema evening</h3>
                        <h5>This is already a tradition. Every last day of the month we have a movie night with my best friend.</h5>
                    </div>
                </div>
            </div>
            <div class="owl-navigation">
                <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>

        </div>
    </div>
</section>
<!-------x--Hobbies---x------->
<section id="gallery">
    <h1>Gallery</h1>
    <h3>Here is photos by me</h3>

<div class="gallery_section">
    <div class="wrapper">
        <div class="gallery">
          <div class="image"><span><img src="assets/GalleryForPort/but.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/cz1.jpg" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/flower1.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/flower.jpg" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/morning.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/mus.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/plava.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/winter.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/Butterfly.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/CZ.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/22.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/5.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/11.JPG" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/1.jpg" alt=""></span></div>
          <div class="image"><span><img src="assets/GalleryForPort/au.JPG" alt=""></span></div>
          
        </div>
    </div>

    <div class="preview-box">
        <div class="details">
            <span class="title">
                Image <p class="current-img"></p>
                of <p class="total-img"></p>
            </span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="img-box">
            <div class="slide prev">
                <i class="fas fa-angle-left"></i>
            </div>
            <div class="slide next">
                <i class="fas fa-angle-right"></i>
            </div>
            <img src="" alt="">
        </div>
    </div>
    <div class="shadow"></div>
</div>


</section>

<section id="work">
<h1 class="work_title">Work <b class="c-1">Experience</b></h1>
<div>
    <div class="work_card c-3">
        <div class="company">
            <span class="year">2018 - 2021</span>
            <h3>Manager, AS Capital</h3>
        </div>
        <div>
            <p>Actively and regularly communicate with existing customers, sell IT goods, including meeting with customers in person. Provide customers with professional, fast and comprehensive support, inform customers about news and changes.</p>
    
        </div> 
    </div>
   
 <div class="work_card c-2">
    <div class="company">
        <span class="year">2017 - 2018</span>
        <h3>Consultant, SIA Circle K Latvia</h3>
    </div>
    <div>
        <p >Fast and high-quality customer service. Knowledge of store assortment. Sale of goods.Attracting new customers. Working with cash register</p>

    </div>
    </div>
   
    <div class="work_card c-5">
        <div class="company">
            <span class="year">2016 - 2017</span>
            <h3>Client consultant, SIA Bite Latvija</h3>
        </div>
        <div >
            <p>Answer incoming calls, actively make new calls and reach new customers. To offer the customer additional products and services. Connect new tariff plans.</p>
    
        </div>
    </div>
    
<hr>
<br>
   <div class="work_skills">
        <div>
            <h2  class="work_title"> <b class="color">Professional skills</b></h2>
        </div>
        <div class="skills">
        <div class="grid-container">
            <h3 class="grid-item">Problem solving</h3>
            <h3 class="grid-item">Adaptability</h3>
            <h3 class="grid-item c-2">Attention to detail </h3>
            <h3 class="grid-item">Time management</h3>
            <h3 class="grid-item c-8">Communication</h3>
            <h3 class="grid-item c-1">Positivity </h3>
            <h3 class="grid-item">Empathy </h3>
        </div>
        </div>
    </div>
    <hr>
    <div>
        <div class="work_skills">
            <h2  class="work_title">Hard skills</h2>
        </div>
        <div class="grid-container two">
            <h3 class="grid-item c-1">HTML</h3>
            <h3 class="grid-item c-2">CSS</h3>
            <h3 class="grid-item c-3">JavaScript</h3>
            <h3 class="grid-item c-4"> PHP</h3>
                <h3 class="grid-item c-5">MySql</h3>

        </div>
    </div>
  
    <div class="bacground2">
        <div>
            <h2  class="work_title">My project</h2>
        </div>
        <div>
            <div class="cards_position">
                <div class="card c-4">
                    <a href="https://github.com/Irena3Z/WB-tictactoe" target="_Blank">
                        <img src="assets/home/tict.jpg" alt="game" width="300">
                        <h3>Games</h3>
                        <p>Tic Tac Toe <br> <b>&</b> <br> Four In Line
                        </p>
                    </a>
                   
                </div>
                <div class="card c-8">
                         
                         <a href="https://github.com/Irena3Z/Wireframes" target="_Blank">
                            <img src="assets/home/wireframes.jpg" alt="" width="300">
                            <h3>Wireframes</h3>
                         <p>Navigation bar and website skripts</p>
                         </a>
                         
                </div>
         
                <div class="card">
                    <a href="https://github.com/Irena3Z?tab=repositories" target="_Blank">
                        <img src="assets/home/social.jpg" alt="" width="300">
                        <h3>Social media</h3>
                        <p>Youtube, Facebook <br>  and <br> Instagram navigation bar</p> 
                    </a>
                   
                 </div>  
        </div>
    </div>
   
    </div>

</section>

<section id="contact">
    <div class="contact_card">
        <div class="social_info">
            <h1>Get in <b class="color"> Touch</b> </h1>
    <p>If you are interested in working together or learn more about me. <br> Then here you can send me an email or search for me on social networks.</p>
       <span class="c-5">Write: zbitkovski3@gmail.com</span> 
       <div class="social text-gray">
        <a href="https://www.facebook.com/irena.3Bit/" target="_Blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/irena_3bit/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/irena-zbitkovska-88b473206/" target="_Blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/Irena3Z" target="_Blank"><i class="fa-brands fa-github"></i></a>
    </div>
    </div>
    <div class="send_message">
    <form action="" method="POST" class="form2">
        <div class="row">
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" name="name2" id="name" required> 
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" name="email2" id="email" required> 
            </div>
        </div>
        <div class="input-group textarea">
            <label for="message">Message:</label>
            <textarea type="text" name="message2" id="message" required></textarea> 
        </div>
        <div class="input-group">
            <button name="submit2" class="btn_Submit">SEND MESSAGE</button>
        </div>
    </form>
    </div>
    </div>

</section>
</main>
<footer>
    <div class="footer_position">
        <div>
            <p>This is my first home site , I will be pleased if you leave a comment !</p>
        </div>
        <div class="button_position">
            <a href="./CommentBox.php" target="_blank" rel="" class="G_btn">GO TO COMMENTS</a>
        </div>
    </div>
</footer>


<!------x-----Main Site Section--------x-->

<script src="./js/jquery3.6.0.min.js"></script>

<script src="./js/owl.carousel.min.js"></script>

    <script src="./js/main.js"></script>
</body>
</html>