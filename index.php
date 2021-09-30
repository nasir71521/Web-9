<?php
 if (isset($_POST['chat-submit'])) {

  $to = $_POST['email']; 
  $subject = $_POST['name'];
  // $message = getRequestURI();
  $message = $_POST['message'];
  $from = "nasir71521@gmail.com";
  $headers = "From:" . $from;



  if (mail($to, $subject, $message, $headers)) {
      echo "Mail Sent.";
  }
  else {
      echo "failed";
  }
}
 if (isset($_POST['submit'])) {

    // print_r($_POST);
    // exit();

    $to = $_POST['email']; 
    $subject = $_POST['name'];
    // $message = getRequestURI();
    $message = $_POST['message'];
    $from = "nasir71521@gmail.com";
    $headers = "From:" . $from;



    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INSTANT-DIGITAL</title>
  <!-- <meta content="" name="description">
  <meta content="" name="keywords"> -->

   <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<!--  -->
<body>

 
  <!-- form pop up start -->
 
  <!-- form pop up end -->
  
  <!-- ======= Header ======= -->
 <!-- <div> -->
  <header  style="background-color: #fcfcfc;" id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h3 class="text-light mt-3"><a href="index.html"><span style="font-family: 'Noto Sans JP', sans-serif; color: #000;">Instant Digital</span></a></h3>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li id="click" class="active mt-3 mr-5 text-dark"><a href="index.php" style="font-family: 'Montserrat', sans-serif;">Home</a></li>
          <li id="click" class="mt-3 mr-5 text-dark"><a href="about.php" style="font-family: 'Montserrat', sans-serif;">About</a></li>
          <li id="click" class="mt-3 mr-5 text-dark"><a href="team.html" style="font-family: 'Montserrat', sans-serif;">Team</a></li>
          <li id="click" class="mt-3 mr-5 text-dark"><a href="contact.php" style="font-family: 'Montserrat', sans-serif;">Contact</a></li>
           
          <li class="shape d-flex justify-content-center mt-2">
       
	          <a id="touch" class="text-center text-white mt-2 mr-4" href="about.php#contact">Get In Touch</a>
           </li>

           <li>

           </li>
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 
  
  <!-- ======= Hero Section ======= -->
  <section id="hero"class="d-flex align-items-center">

    <div class="container">
      <div style="margin-top: 140px;" class="row">
        <div style="margin-top: -90px;" class="mb-4 col-lg-6  pt-lg-0 order-2  order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="color: #333232; text-align: center; padding-top: 100px;">The New Standard In Digital Soloution</h1>
          <p style="color: #000; line-height: 2; font-family: 'Open Sans', sans-serif;" data-aos="fade-up" data-aos-delay="400">Instant Digital is a Singapore-Based startup IT compnay driven by aspiring young talents and powered by the most modern industry standard technology stacks our core services include</p>
          <div class="d-flex jusitfy-content-center">
            <ul id="list">
              <li style="color: #333232;">Customize Software Development</li>
              <li style="color: #333232">UI/UX optimization</li>
              <li style="color: #333232">IT solutions consultation</li>
            </ul>
          </div>   
        
          <div id="started">
            <div  style="margin-bottom: 170px; margin-top: 60px;" class="shap d-flex justify-content-center mt-3" data-aos="" data-aos-delay="800">
              <a  id="touc" style="margin-left: 30px; margin-top: 10px;" class="text-center text-white mr-4" href="about.php">ABOUT</a>
              <!-- <a id="started" style="margin-left: -60px;" href="#about" class="btn-get-started scrollto">Get Started</a> -->
            </div>
          </div>
         
        </div>
        <!-- style="width: 600px; margin-left: 2rem; padding-top: 20px;" -->
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <!-- </div> -->
  <main id="main">

    <!-- ======= More Services Section ======= -->
   <!-- ======= Recent Blog Posts Section ======= -->
   <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <div class="section-title" data-aos="fade-up">
          <h2 id="process" style="word-spacing: 30px; letter-spacing: 10px; font-family: 'Montserrat', sans-serif; margin-top: 70px; margin-bottom: 20px; text-align: center;">Methodology and Process</h2>
        </div>
      </header>

      <div class="row">

        <div id="simple" class="col-lg-3">
          <div id="last" class="post-box">
            <div  class="post-img"><img style="height: 147px;" src="assets/img/design.jpg" class="img-fluid" alt=""></div>
            <div>
              <h3 class="post-title">Designs</h3>
              <ul style="line-height: 3; list-style-type: none; margin-left: -60px;">
                <li>
                <i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Plan</li>
                <li><i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Drawings</li>
                <li><i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Algorathams</li>
              </ul>
            </div> 
          </div>
        </div>

        <div class="col-lg-3">
          <div id="last"  class="post-box">
            <div class="post-img"><img style="height: 147px;" src="assets/img/implement.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Implement</h3>
            <ul style="line-height: 3; list-style-type: none; margin-left: -60px;">
              <li><i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Manufacturing</li>
              <li><i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Coding</li>
              <li><i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Testing</li>
              <li><i style="padding: 0 5px;" class="fas fa-long-arrow-alt-right"></i>Validation</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div id="last" id="last"  class="post-box">
            <div class="post-img"><img style="height: 147px; width: 280px;" src="assets/img/implement.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Operate</h3>
            <ul style="line-height: 3; list-style-type: none; margin-left: -60px; ">
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Deliver Intended Value</li>
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Maintains & operate</li>
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Optimize for 24/7 hours</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3">
          <div id="last"  class="post-box">
            <div class="post-img"><img  style="height: 147px;" src="assets/img/light.webp" class="img-fluid" alt=""></div>
            <h3 class="post-title">Conceive</h3>
            <ul style="list-style-type: none; line-height: 3; margin-left: -60px;">
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Define Customers Need</li>
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Technology stacks</li>
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Enterprises Strategy</li>
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Regulation Compilance</li>
              <li><i style="padding: 0 3px;" class="fas fa-long-arrow-alt-right"></i>Business Plan</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->

  
<!--Servies-->
<div>
  <section style="padding-bottom: 60px;"  id="services" class="services">
        
    <div class="container" data-aos="fade-up">

      <header id="services" class="section-header">
        <div class="section-title" data-aos="fade-up">
          <h2 >Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>
      </header>

      <div class="row gy-4">

        <div id="design" class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <div class="d-flex justify-content-center">
              <img style="height: 130px; width: 140px;" class="fas fa-palette r-discuss-line icon " src="assets/img/web.png" alt="">
            </div>
            
            <h3>Web design and Development</h3>
            <p style="line-height: 2;">Welcome here we are here offering you a complete web-devlopment and Android in a very normal buget. Creative and resposive sites</p>
          </div>
        </div>

        <div id="iot" class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <img class="r-discuss-line icon" style="height: 130px; width: 140px;" src="assets/img/iot.jpg" alt="">
            <h3>IOT Dashboard System</h3>
            <p style="line-height: 2;">Our motto is to provide an excellent work please check our site. We are IT industry in singapore. Any work regarding IT. Contact here.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            <img class="ri-disuss-line icon" style="width: 120px; height: 120px;" src="assets/img/application.jpeg" alt="">
            <h3>Web Application Development</h3>
            <p style="line-height: 2;">We will help you to buid a modern web application for you with a new designs and creative work for you in normal buget</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red">
            <img style="height: 130px; width: 140px; padding-top: -50px;" src="assets/img/ui.png" class="r-discuss-line icon" alt="">
            <h3>UI/UX Designs</h3>
            <p style="line-height: 2;">If you want UI/UX designs then you are on a right place. We will make a interactive UI/UX designs for you.</p>
          </div>
        </div>

        <div id="cloud" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple">
            <img style="height: 130px; width: 140px;" class="r-discuss-line icon" src="assets/img/cloud.png" alt="">
            <h3>Cloud Solutions</h3>
            <p style="line-height: 2;">We are Cloud solutions compnay if you have any problem regarding cloud any issue want an account then contact with us.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <img class="ri-discuss-line icon" style="height: 130px; width: 140px;" src="assets/img/softwaredevelopment.png" alt="">
            <h3>Custom Software Development</h3>
            <p style="line-height: 2;">If you want a custom-software for your compnay and any bug or issue in your software feel free to contact us.</p>
          </div>
        </div>

      </div>

    </div>

  </section>

<!--End Service Section-->

</div>


<!--Second Last Section-->
<!-- <a id="affect" href="#">  </a> -->
<div class="container-fluid " style="background-color: rgb(247, 248, 252); padding: 40px; margin-bottom: 80px;">
    <h2 class="text-center text-dark mb-5">Leverage Modern Technology and automate your business starting today</h2>
    <p class="text-center text-dark">Get in touch with a sales professional Obligation-Free</p>
    <div class="d-flex justify-content-center">
<button style="border-radius: 10rem; border: 1px solid blue"  type="button" class="btn " data-toggle="modal" data-target="#exampleModal"> <i style="font-size: 30px;" class="far fa-comments"></i> </button>
<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="center" class="container" >
     <form  action="" method="POST" id="shadow" style="border: 1px solid rgb(234, 237, 235); border-radius: 3px">
     
        <div style="background-color: rgb(133, 80, 243); border-radius: 4px; ">
            <h5 class="pt-3 pb-3 ml-4 text-white" style="padding-left: 10px; padding-bottom: 10px; width: 100%;">Online-Chat</h5>
        </div>
        <div class="mt-4 pt-2 pb-2 mb-2" style="background-color: rgb(60, 184, 104); border-radius: 4px;">
            <p class="text-white pl-3 pr-3">Leave your question in this form and we will definitely answer!</p>
        </div>

         <textarea class="form-control ml-4" style="width: 80%;" id="" cols="30" rows="4" name="message" placeholder="Enter your message"></textarea>

         <input style="width: 80%;" class="ml-4 mb-3 mt-3 form-control" type="text" name="name" placeholder="Enter your name">
         <input style="width: 80%;" class="ml-4 mb-3 form-control" type="email" name="email" placeholder="Enter your email">
         <div class="d-flex justify-content-center mb-4">
              
             <input type="submit" name="chat-submit" value="send">
            <!-- <a  class="pl-3 pr-3 pt-2 pb-2" style="background-color: rgb(133, 80, 243); color:#fff; text-decoration: none; border-radius: 3px;" href="#">Send</a> -->
         </div>

     </form>
      
      
  </div>  
      </div>
    </div>
  </div>
</div>

    </div>
</div>

<!-- Chat pop start -->

  <!-- Chat popup End -->
  
<!---End of second last section-->    

<!--Footer-->
    <div class="footer-top" style="background-image: url(assets/img/footer-bg.png); padding-top: 70px; padding-bottom:40px ;">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span class="">Instant Digital</span>
            </a>
            <p style="line-height: 2;text-align: center;" class="mt-5">Instant-Digital is an IT compnay in Singapore. Provide all servies related to IT industry and have a very string team. To make the things interactive </p>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul style="list-style-type: none; line-height: 2;">
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="team.html">Team</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul style="list-style-type: none; line-height: 2;">
              <li><i class="bi bi-chevron-right"></i> <a href="#simple">Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#design">Web-design & Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#iot">IOT</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#cloud">Cloud</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#operate">Operate</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p style="line-height: 3;">
              Singapore<br>
              <strong>Phone:</strong> +65 93849006<br>
              <strong style="margin-left: 60px;">Email:</strong>lwinmmt@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
  </script>

</body>

</html>
