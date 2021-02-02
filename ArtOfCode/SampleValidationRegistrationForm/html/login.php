<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- animation -->
    <link rel="stylesheet" href="css/tip.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="javaScript/vali.js"></script>


  </head>
  <body>

    
    <div class="bg"></div>
   
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab">Sign In</label>
             <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label> 

            <!-- Sign In form -->
            
            <!-- new -->
            <div class="login-form">  
                
                <div class="sign-in-htm">
                    <div class="frame">
                    <div ng-app ng-init="checked = false">
                    <form class="form-signin" action="validation.php" method="post" name="Loform">
                    
                
                    <!-- Input User Name -->
                    <div class="group">
                       <label for="user" class="label">User Name</label>
                       <input type="text" name="name" class="input" placeholder= " &#61447  artofcode@gmail.com" required>
                        <!-- <input id="user" type="text" placeholder= " &#61447  artofcode@gmail.com" class="input" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>   -->
                        <!-- <small id="emailHelp" class="form-text text-muted"> We"ll never share your email with anyone else.</small> -->
                    </div>

                    <!-- Input Password -->
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input"  data-type="password" placeholder= " &#xf084  password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>

                    
                    <!-- checkbox -->
                    <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          

                    <!-- Sign In button -->
                    
                    <div class="group">
                        <input type="submit" class="button" id="submit" value="Sign In" onclick="checkEmail();">
                    </div>

                    <div class="hr1"></div>
                    <div class="foot-lnk1">
                        <a href="#forgot">Forgot Password?</a>
                    </div>

            
                </div>
                </div>
                </div>

            </form>

                <!-- Sign Up form -->
                <script src="javaScript/vali.js"></script>
                <form name="RegForm" action="registration.php" method="post">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="name" class="input" placeholder="Name" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="email" name="email" class="input" placeholder="artofcode@gmail.com" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password_1" class="input" data-type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Confirm Password</label>
                        <input id="pass" type="password" class="input" name="password_2" data-type="password" placeholder="Retype Password" required>
                    </div>
                    
                    <div id="animation">
                        <div class="group">
                            <p><input type="submit" class="btn-success" value="Sign Up" id="toggle"></p>
                        </div>

                        <!--animation-->
                        <!-- 

                            <p></p><button value="submit" id="toggle" type="button" class="btn btn-success">Submited</button></p>-->
        
                            <!--Animation -circle loader-->
                            <div class="circle-loader">
        
                                <div class="checkmark draw"></div>
                            
                            </div>
        
                        <!-- Animation script -->
                          <script src="javaScript/jquery.min.js"></script>
                          <script src="javaScript/tip.js"></script>
    
                    </div> 

                    <div class="hr2"></div>
                    <div class="foot-lnk">
                        <a href="#signin"><label for="tab-1">Already Member?</a>
                    </div>
                </div>  

            </div>
        </div>
    </div>
    

      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
