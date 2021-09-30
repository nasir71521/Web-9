<?php
 if (isset($_POST['submit'])) {

    // print_r($_POST);
    // exit();

    $to = $_POST['email']; 
    $subject = $_POST['name'];
    // $message = getRequestURI();
    $message = $_POST['message'];
    $from = "nasir71521@gmail.com";
    // $headers = "From:" . $from;
    $headers = "From: nasir71521@gmail.com" . "\r\n" .
                "CC: umairaziz21@gmail.com";
    // $headers = array("From: nasir71521@gmail.com",
    // "Reply-To: nasir71521@gmail.com",
    // "X-Mailer: PHP/" . PHP_VERSION
    // );
    // $headers = implode("\r\n", $headers);

    // mail($to, $subject, $message, $headers);



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
    <title>FORM ONE</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="formOne.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
</head>
<body>
<div id="form" style="border: 15px solid #fcfcfc; margin-top: 10px;" class="container d-flex jusitfy-content-center">  
     
    <form action="" method="POST" class="pb-5">
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
            <input type="submit" name="submit" value="Submit" id="touch"  class="text-center text-white mt-2 ml-3" >
                <a id="touch"  class="text-center text-white mt-2 ml-3" href="">Send Message</a>
            </div>
        
     </form>
    
</div>
</body>
</html>

