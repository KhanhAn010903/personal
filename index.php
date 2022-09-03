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
    <title>Khanh An's Profile</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
if(isset($message)){
    foreach($message as $message){
       echo '
       <div class="message" data-aos="zoom-out">
          <span>'.$message.'</span>
          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
       </div>
       ';
    }
 }
 
?>
    <!-- header session starts -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Khánh An.</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>

    <!-- header session ends -->


    <!-- home section starts -->
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="images/ma.jpg" alt="">
        </div>
        <div class="content" data-aos="fade-up">
            <h3 data-aos="fade-up">hi,i am Khánh An</h3>
            <span data-aos="fade-up">Student at FPT Polytechnic College</span>
            <p data-aos="fade-up">The major I am studying is website programming</p>
            <a href="#about" class="btn">about me</a>
        </div>
    </section>

    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">
        <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
        <div class="biography" >
            <!-- <p>I'm trying every day to become a Fullstack Web developer</p> -->
            <p data-aos="fade-up">I live in Yen My district, Hung Yen love. Currently, I am studying at FPT College in Nam Tu Liem District, Hanoi</p>
            <div class="bio">
                <h3 data-aos="zoom-in"><span>name : Đặng Quang Khánh An</span></h3>
                <h3 data-aos="zoom-in"><span>email : andqkph25002@fpt.edu.vn</span></h3>
                <h3 data-aos="zoom-in"><span>address : Yên Mỹ , Hưng Yên</span></h3>
                <h3 data-aos="zoom-in"><span>phone : 0865842258</span></h3>
                <h3 data-aos="zoom-in"><span>age : 19 years</span></h3>
            </div>
            <a href="#" class="btn" data-aos="fade-up">download</a>
        </div>
        <div class="skills" data-aos="fade-up">
        <h1 class="heading"><span>skills</span></h1>
        <div class="progress">
            <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>70%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>CSS</span><span>70%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span>30%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span>50%</span></h3></div>
        </div>
        </div>

        <div class="edu-exp">
            <h1 class="heading" data-aos="fade-up"><span>education & experience</span></h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title" data-aos="fade-right">education</h3>
                    <div class="box" data-aos="fade-right">
                        <span>(2019-2020)</span>
                        <h3>web designer</h3>
                        <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?. 
                        I believe whatever doesn't kill you, simply makes you stranger.
                        </p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>(2020-2021)</span>
                        <h3>web designer</h3>
                        <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?. 
                        I believe whatever doesn't kill you, simply makes you stranger.
                        </p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>(2021-2022)</span>
                        <h3>web designer</h3>
                        <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?. 
                        I believe whatever doesn't kill you, simply makes you stranger.
                        </p>
                    </div>
                </div>
                <div class="box-container">
                    <h3 class="title" data-aos="fade-left">experience</h3>
                    <div class="box"  data-aos="fade-left">
                        <span>(2019-2020)</span>
                        <h3>web designer</h3>
                        <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?. 
                        I believe whatever doesn't kill you, simply makes you stranger.
                        </p>
                    </div>
                    <div class="box"  data-aos="fade-left">
                        <span>(2020-2021)</span>
                        <h3>web designer</h3>
                        <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?. 
                        I believe whatever doesn't kill you, simply makes you stranger.
                        </p>
                    </div>
                    <div class="box"  data-aos="fade-left">
                        <span>(2021-2022)</span>
                        <h3>web designer</h3>
                        <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?. 
                        I believe whatever doesn't kill you, simply makes you stranger.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- about section ends -->

<section class="services" id="services">
    <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?.</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>web development</h3>
            <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?.</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>web development</h3>
            <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?.</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>web development</h3>
            <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?.</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3>web development</h3>
            <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?.</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>web development</h3>
            <p>You can't rely on anyone these days, you gotta do everything yourself, don't we?.</p>
        </div>
    </div>
</section>

<section class="portfolio" id="portfolio">
    <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <img src="images/img-1.jpg" alt="">
            <h3>web development</h3>
            <span>(2020 - 2022)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img-2.jpg" alt="">
            <h3>web development</h3>
            <span>(2020 - 2022)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img-3.jpg" alt="">
            <h3>web development</h3>
            <span>(2020 - 2022)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img-4.jpg" alt="">
            <h3>web development</h3>
            <span>(2020 - 2022)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img-5.jpg" alt="">
            <h3>web development</h3>
            <span>(2020 - 2022)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img-6.jpg" alt="">
            <h3>web development</h3>
            <span>(2020 - 2022)</span>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>
    <form action="" method="post">
        <div class="flex">
            <input type="text" data-aos="fade-right" name="name" placeholder="enter your name" class="box" required>
            <input type="email" data-aos="fade-left" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input type="number" data-aos="fade-up" min="0" name="number" placeholder="enter your number" class="box" required>
        <textarea name="message" data-aos="fade-up" class="box" cols="30" rows="10" required placeholder="enter your message" ></textarea>
        <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
    </form>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+8465842258</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>andqkph25002@fpt.edu.vn</p>
        </div>
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Yên Mỹ , Hưng Yên</p>
        </div>
    </div>
</section>

 

<div class="credit"> &copy; copyright @ <?php echo date('Y')?> by <span>Đặng Quang Khánh An</span> </div>










    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init({
      duration:800,
      delay : 300
  })

</script>
</body>

</html>