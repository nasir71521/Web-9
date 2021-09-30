<?php
 if (isset($_POST['contact-submit'])) {

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="assets/img/logo.png" rel="icon">
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
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">  -->
  
    <!-- Template Main CSS File -->
    <link href="assets/css/contact.css" rel="stylesheet">
</head>
<body>
    <header class="fixed-top" style="height: 80px;">        
        <nav class="navbar navbar-expand-lg "  style="background-color: #fcfcfc; height: 70px;">
            <a style="color: black;" class="navbar-brand" href="#">INSTANT-DIGITAL</a>
            <button style="color: #333; background-color: blueviolet;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color: #333;" class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="top" class="navbar-nav ml-auto topnav">
                    <li id="click" class="nav-item active" >
                        <a   class="nav-link mt-2 text-dark" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="click" class="nav-item active">
                        <a  style="margin-left: 100px;" class="nav-link mt-2 text-dark" href="about.php">About</a>
                    </li>
                    <li id="click" class="nav-item active">
                        <a  style="margin-left: 80px;" class="nav-link mt-2 text-dark" href="contact.php">Contact</a>
                    </li>
                    <li id="click" class="nav-item active">
                        <a  style="margin-left: 60px;" class="nav-link mt-2 text-dark" href="team.html">Team</a>
                    </li>
                    <li class="shape d-flex justify-content-center mt-2" style="margin-left: 50px;">
                        <a id="touch"  class="text-center text-white mt-2 mr-4"  href="about.php#contact">Get In Touch</a>
                     </li>
                     <li style="margin-left: 40px;">
                         
                     </li>
            
                 
                </ul>
            </div>

                
    
        </nav>
    </div>
</header>    


<section>
        <iframe style="height: 100%; width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510542.99417245656!2d103.55856032758207!3d1.4059689129949509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da11238a8b9375%3A0x887869cf52abf5c4!2sSingapore!5e0!3m2!1sen!2s!4v1618572167558!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
</section>

<aside>
    <!-- <h1 class="text-center" style="color: #fff; margin-top: 80px;">Instant-Digital</h1> -->
    <h3 class="text-center mt-4" style="color: #333;">Contact Us</h3>
    <ul style="margin-left: 50px; margin-top: 50px; list-style-type: none;">
        <li><h5 style="line-height: 2;" class="text-dark">Phone No: +97-3877821..</h5></li>
        <li>  <h5 style="line-height: 2;" class="text-dark"> Location: Singapore</h5></li>
        <li><h5 style="line-height: 2;" class="text-dark">E-mail:<a class="text-white pl-2" style="text-transform: lowercase;" href="http://lwinmmt@gmail.com">lwinmmt@gmail.com</a></h5></li>
    </ul>
    
    <div class="bg-contact2">
		<div style="padding: 20px 40px;" class="container-contact2">
			<div class="wrap-contact2">
				<form method="POST" class="contact2-form validate-form" autocomplete="off">
					<span class="contact2-form-title">
						Contact Us
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="email" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

                    <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="phone">
						<span class="focus-input2" data-placeholder="phone"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="Description"></span>
					</div>

                    <div class="">
						<input style="display: inline-block;" class="" type="checkbox" name="checkbox">
						 <p style="display: inline-block;">I agree to the processing of my personal data and I am informed of the right to withdraw my consent.</p>
					</div>

                   

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
                            <li class="shape d-flex justify-content-center mt-2">
                                <input style="background-color: rgba(118, 68, 237, 0.9); color: #fff" type="submit" name="contact-submit" value="Submit">
                                <!-- <a id="touch" class="text-center text-white mt-2 mr-4" href="">SUBMIT</a> -->
                            </li>
							<!-- <button class="contact2-form-btn">
							    Submit
							</button> -->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
  
</aside>
<footer>
    <h5 class="text-dark text-center pb-5" style="padding-top: 30px;">© 2021 . All rights reserved.</h5>
      <ul id="foot" class="d-flex justify-content-center">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="team.html">Team</a></li>
      </ul>
</footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>

