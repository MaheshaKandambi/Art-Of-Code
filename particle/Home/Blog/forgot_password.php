<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_of_code2');

if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $query = "select*from usertable where email='$email'";     //check whether entered email is in the table or not
    $run = mysqli_query($conn, $query); //run query

        if(mysqli_num_rows($run)>0){
        $row = mysqli_fetch_array($run);  //fetches a result row as an array
        $db_email = $row['email'];
        $db_id = $row['id'];
        $token = uniqid(md5(time())); //This is a random token.
        $query = "INSERT INTO password_reset(id, email, token) VALUES(NULL, '$email', '$token')";

        if(mysqli_query($conn,$query)){  //run query
          //sending mails
            $to=$db_email;
            $subject = "Password reset link";
            $message = "Click <a href = 'http://localhost/SampleValidationRegistrationForm/html/reset.php?token=$token'>here</a> to reset your passwor.";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $header = "from:kandambi.mahesha@gmail.com \r\n";
            $headers .= 'From: <demo@demo.com>' . "\r\n";
            // mail($to,$subject,$message,$headers);
            $msg="<div class='alert alert-success'>Password resert link has been sent to the email.</div>";      
        }

    }else{
        $msg="<div class='alert alert-danger'>User not found.</div>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>


  <div class='light x1'></div>
  <div class='light x2'></div>
  <div class='light x3'></div>
  <div class='light x4'></div>
  <div class='light x5'></div>
  <div class='light x6'></div>
  <div class='light x7'></div>
  <div class='light x8'></div>
  <div class='light x9'></div>



  <div class="container-center">
    <center>
    <h1><span color></span>
      </center>
  
  <h2>Forgot Your Password?</h2>
  <h2>Don't Worry!</h2>
 
  <form action="forgot_password.php" method="post">

     
    <h4>
      Just provide your email<br> 
      and we'll send you a link to <br>
      reset your password.
    </h4>

    <formgroup>
      <input type="text" name="email" Required/>
      <label for="email"><br>Email</label>
      <span>enter your email</span>
    </formgroup>

    <?php if(isset($msg)) {echo $msg;} ?>
    
    <button id="login-btn" class="type" name="submit" >Submit</button>
    
  </form>
   
  <p>Did you remember? <a href="home.php">Sign In</a></p>
  
</div>
</div>
</body>
</html>

