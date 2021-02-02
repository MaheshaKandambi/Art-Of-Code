<?php

$conn = mysqli_connect('localhost', 'root', '', 'art_of_code2');

if(isset($_GET['token'])) {
    $token = mysqli_real_escape_string($conn, $_GET['token']);
    $query = "select*from password_reset where token = '$token'";
    $run = mysqli_query($conn,$query);

    if(mysqli_num_rows($run)>0){
        $row = mysqli_fetch_array($run);
        $token = $row['token'];
        $email = $row['email'];
    }else{
        header("location:login.php");
    }
}


if(isset($_POST['submit'])){
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    $options = ['cost'=>11];
    $hashed = password_hash($password,PASSWORD_BCRYPT,$options);

    if($password!=$confirmpassword){
        $msg = "<div class='alert alert-danger'>Sorry,passwords didn't matched</div>";
    }elseif(strlen($password)<8){
        $msg = "<div class='alert alert-danger'>Password must be 8 characters long.</div>";
    }
    else{
        $query = "update usertable set password = '$hashed' where email='$email'";
        mysqli_query($conn,$query);
        $query = "delete from password_reset where email = '$email'";
        mysqli_query($conn,$query);
        $msg = "<div class='alert alert-success'>Password Updated.</div>";
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reset Password</title>
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

  <h2>Reset Your Password</h2>

  <form action="reset.php" method="post">


    <h4>
      You can reset your password <br> 
      using this form
    </h4>

    <formgroup>
      <input type="text" name="email" value = "<?php echo $email ?>"/>
      <label for="email"><br>Email</label>
      <span>enter your email</span>
    </formgroup>

    <formgroup>
      <input type="password" name="password"/>
      <label for="password"><br>Password</label>
      <span>enter your new password</span>
    </formgroup>

    <formgroup>
      <input type="password" name="confirmpassword"/>
      <label for="confirm password"><br>Confirm Password</label>
      <span>confirm your new password</span>
    </formgroup>

    <?php if(isset($msg)) {echo $msg;} ?>
  
    <button id="login-btn" class="type" name="submit" >Reset Password</button>
    
  </form>
   
  <p>Did you remember? <a href="login.php">Sign In</a></p>
  
</div>
</div>
</body>
</html>
