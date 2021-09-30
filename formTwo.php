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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Form</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="formTwo.css">
  
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/> -->
</head>
<body>
  
  <div id="center" class="container mt-5" >
     <form  action="" method="POST" id="shadow" style="border: 1px solid rgb(234, 237, 235); border-radius: 3px">
     
        <div style="background-color: rgb(133, 80, 243); border-radius: 4px; ">
            <a style="color: #fff;" href="#"><h5 class="text-right ">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </h5></a> 
            <h5 class="pt-3 pb-3 ml-4 text-white" style="padding-left: 10px; padding-bottom: 10px; width: 100%;">Online-Chat</h5>
        </div>
        <div class="mt-4 pt-2 pb-2 mb-2" style="background-color: rgb(60, 184, 104); border-radius: 4px;">
            <p class="text-white pl-3 pr-3">Leave your question in this form and we will definitely answer!</p>
        </div>

         <textarea class="form-control ml-4" style="width: 80%;" id="" cols="30" rows="4" name="message" placeholder="Enter your message"></textarea>

         <input style="width: 80%;" class="ml-4 mb-3 mt-3 form-control" type="text" name="name" placeholder="Enter your name">
         <input style="width: 80%;" class="ml-4 mb-3 form-control" type="email" name="email" placeholder="Enter your email">
       
         <div class="d-flex justify-content-center mb-4">
             <input type="submit" name="chat-submit" value="Send">
            <!-- <a class="pl-3 pr-3 pt-2 pb-2" style="background-color: rgb(133, 80, 243); color:#fff; text-decoration: none; border-radius: 3px;" name="chatSubmit" href="#">Send</a> -->
         </div>
         

     </form>
      
      
  </div>  
</body>
</html>