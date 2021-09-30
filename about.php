<?php
 if (isset($_POST['about-submit'])) {

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
    <title>About Section</title>
    <link href="assets/img/logo.png" rel="icon">
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">    
    <link href="assets/css/about.css" rel="stylesheet">
</head>
<body>
  <nav  class="fixed-top navbar navbar-expand-lg navbar-light" style="background-color: #fcfcfc; padding-top: 20px; padding-bottom: 20px;">
    <a class="navbar-brand ml-5" href="#">INSTANT-DIGITAL</a>
    <button style="border: none" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span style="margin-left: 0px;" class="navbar-toggler-icon"></span>
    </button>
  
    <div  class=" collapse navbar-collapse" id="navbarSupportedContent">
      <ul style="margin-left: 130px;" class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a id="click" style="font-family: 'Montserrat', sans-serif;" class="nav-link ml-5 mt-3" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a id="click" style="font-family: 'Montserrat', sans-serif;" class="nav-link ml-5 mt-3" href="about.php">About</a>
        </li>
        <li class="nav-item active">
          <a id="click" style="font-family: 'Montserrat', sans-serif;" class="nav-link ml-5 mt-3" href="contact.php">Contact</a>
        </li>
        <li class="nav-item active">
          <a id="click" style="font-family: 'Montserrat', sans-serif;" class="nav-link ml-5 mt-3" href="team.html">Team</a>
        </li>

        <!-- <li class="shape d-flex justify-content-center  ml-5" data-toggle="modal" data-target="#exampleModal" >
          <a id="touch"  class="text-center text-white mt-2 mr-4" href="">Get In Touch</a>
         </li> -->
        <li class="shape d-flex justify-content-center mt-3 ml-5">
          <a id="touch"  class="text-center text-white mt-2 mr-4" href="#contact">Get In Touch</a>
         </li>

      </ul>
     
    </div>
  </nav>


       <div style="margin-top: 0px; background-color: #fcfcfc; " class="jumbotron jumbotron-fluid">

       <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div id="form" style="border: 15px solid #fcfcfc; margin-top: 10px;" class="container d-flex jusitfy-content-center">  
     
    <form action="" method="POST" class="pb-1">
       <a href="#"><h5 class="text-right mt-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
       </h5></a> 
        <h2 style="font-weight: bold;" class="text-center mt-2 mb-4">Get In Touch</h2>
       
        <p class="text-center text-white p-2" style="background-color: #f94600; line-height: 2; padding: 8px 0px;">
          As our customer, you can host any of your IT solutions implemented jointly with Instant-Digital on our servers at our own data center in Singapore free of charge. On top of that, we offer you free Customer Technical Support for the entire period of cooperation!
        </p>
            <input id="input" style="margin-left: 45px;" class="mb-4 mt-4" type="text" name="name" class="form-control" placeholder="Name">

            <input id="input" style="margin-left: 45px;"  class="mb-4"  type="email" name="email" class="form-control" placeholder="Email">
    
            <input id="input" style="margin-left: 45px;"  class="mb-4"  type="text" name="phone" class="form-control" placeholder="Phone">
    
            <input id="input" style="margin-left: 45px;" class="mb-4"  type="text" name="message" class="form-control" placeholder="Meassage">
          
             <div class="container">
                <input style="display: inline-block;" class="" type="checkbox" name="checkbox" autocomplete="off">
                <p style="display: inline-block;">I agree to the processing of my personal data and I am informed of the right to withdraw my consent.</p>
             </div>

          
            <div id="but" class="shape  d-flex jusitfy-content-center">
                      <input id="touch" type="submit" name="submit" value="Submit" id="touch"  class="text-center mt-2 ml-3" >
                <a   class="text-center text-white mt-2 ml-3" href="">Send Message</a>
            </div>
        
     </form>
</div> -->
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
        <div class="container" style="margin-bottom: 100px">
          <div class="row">
               <div class="col-lg-6">
                     <h2 class="text-dark text-center mb-3">The New Standard in IT Solutions</h2>
                       <h6 class="text-dark text-center" style="line-height: 2;">
                        Founded and run by software engineers, Instant Digital 
                        LTD is a Singapore based IT outsourcing and custom software and mobile app development company driven by talent and powered with technology.
                       </h6>

                       <ul style="list-style-type: none; color: #333232 ; line-height: 3; text-align: center;">
                           <li>
                            ● We are dedicated to every customer's success
                           </li>
                           <li>
                            ● We believe in trust and personal responsibility
                           </li>
                           <li>
                            ● We invest in innovation that matters
                           </li>
                       </ul>
               </div>

               <div class="col-lg-6">
                  <img id="buti"  class="mt-3" style="width: 400px; height: 260px; border-radius: 5px; margin-left: 60px;" src="assets/img/bout.png" alt="">
               </div>
          </div>
        </div>
      </div> 



       <img id="img" src="assets/img/fice.jpg" alt="Paris" style="width:70%;"> 
      
    
      <div id="contact" class="bg-contact2" style="background-image: url('assets/img/bg-01.jpg'); margin-top: 130px;">
		<div style="padding: 50px 20px;" class="container-contact2">
			<div class="wrap-contact2">
				<form  method="POST" class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name" autocomplete="off">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="email" name="email" autocomplete="off">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

                    <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="phone" autocomplete="off">
						<span class="focus-input2" data-placeholder="phone"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message" autocomplete="off"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

          <div class="">
						<input style="display: inline-block;" class="" type="checkbox" name="checkbox" autocomplete="off">
						 <p style="display: inline-block;">I agree to the processing of my personal data and I am informed of the right to withdraw my consent.</p>

            </div>

                   

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
              <li id="buti" class="shape d-flex justify-content-center mt-2">
                <input id="back" class="text-white"  type="submit" name="about-submit" value="Send">
                <!-- <a id="touch" class="text-center text-white mt-2 mr-4" href="">SUBMIT</a> -->
               </li>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div> 



    
   
    
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
  </script>
</body>
</html>