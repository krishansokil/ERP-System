<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/db.php';
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $image     = $_FILES['image']['name'];
    $target = "img/".basename($image);
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `faculty_signup` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        ?>
              <script>
              alert("Email Already Exists ! Please try new");
              </script>
              <?php
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `faculty_signup` ( `full_name`,`email`,`phone`,`password`,`image`,`dt`) VALUES ('$full_name','$email','$phone','$hash','$image', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                ?>
               <script>
              alert("Your Request has Registered ! Please Login After Admin Confermation");
              </script>
              <?php
            }
        }
        else{
            ?>
          <script>
          alert("Password Does not Match ! Please Check the Password and Try again");
          </script>
          <?php
        }
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }
  else{
        $msg = "Failed to upload image";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<title>Feculty Registration</title>
</head>
<style>
*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
    background:#f3f2f2;
    height: 100%;
}
.b-height{
    position: relative;
    padding:35px 0px 0px;
}
.b-wrapper{
    display:flex;
    align-items:center;
    min-height: 650px;
    background-color: #fff;
    box-shadow: 0px 3px 10px rgba(0,0,0,.2);
} 
.b-min-height{
    height: 650px;
    background: #00bdaa;    
}
.b-logo{
    width:100px;
}
.b-title{
    padding:100px 0px 0px;
}
.b-title h1{
    color:#fff;
    font-weight:600;
}
.b-title p{
    color: #e7e7e7;
    margin:30px 0px 40px;
}
.b-title button{
    letter-spacing: 0.4px;
    padding: 15px 85px;
    border-radius: 36px;
    border: 1.5px solid #fff;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
}
.b-title button:focus{
    outline:none;
}
.b-form{
    width:60%;
    margin:auto;
}
.b-form-title h1{
    color: #00bdaa;
    font-size: 34px;
    font-weight: 900;
}
.b-form-title i{
    width: 50px;
    height: 50px;
    border: 1px solid #ddd;
    border-radius: 36px;
    line-height: 46px;
    font-size: 20px;
    margin: 13px 5px;
    color:#333;
    cursor:pointer;
}
.b-subtext{
    color: #b4b2b2;
    font-size: 14px;
}
.b-form .form-control{
    font-size:14px;
    height: 50px;
    padding-left: 45px;
    background: #edf9fe;
    border-color: #edf9fe;
    color: #333;
}
.b-form .form-control:focus{
    outline:none;
    box-shadow:none;
} 
.form-group{
    position: relative;
}
.b-font{
    position: absolute;
    top: 18px;
    left: 18px;
    z-index: 10;
    color: #6b6b6b;
    font-size:13px;
}    
.b-form button{
    letter-spacing: 0.4px;
    padding: 15px 85px;
    border-radius: 36px;
    border: 1.5px solid #fff;
    background: #00bdaa;
    color: #fff;
    text-transform: uppercase;
    margin-top:25px;
}
.b-form button:focus{
    outline:none;
}
.b-form .b-forgot{
    border-bottom: 1px solid #e8e4e4;
    padding-bottom: 10px;
    color: #7e7e7e;
    font-size: 14px;
    font-weight: 600;
    cursor:pointer;
    display:none;
}
.swift_right{
    display:none;
}
.swift_element{
    display:flex;
    align-items:unset;
    flex-direction: row-reverse;
    transition:0.3s ease-in-out;
    -webkit-transition:0.3s ease-in-out;
    -moz-transition:0.3s ease-in-out;
    -ms-transition:0.3s ease-in-out;
    -o-transition:0.3s ease-in-out;
}

</style>
<body>
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
            <div class="row b-wrapper"> 
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">     
                    <div class="b-title text-center">
                        <h1 class="user_title">Welcome Feculty</h1>
                        <p class="user_subTitle">To keep Connected with us please </br> login with your personal info.</p>
                        <button class="swift sign_in"><a href="faculty_login.php" type="submit" class="butt" style="color: white;">Already Have a
                                Account Please Login</a></button>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <div class="b-form text-center">
                        <div class="b-form-title">
                            <h1 class="form_title">Create Account</h1>
                            <p class="b-subtext"> use your email for registration</p>
                        </div>
                        <form action="faculty_signup.php" method="post"enctype="multipart/form-data">
                            <div class="form-group username">
                                <input class="form-control" type="text" name="full_name" placeholder="Name"required>
                                <i class="fas fa-user b-font"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email"required>
                                <i class="fas fa-envelope b-font"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" type="tel" id="phone" name="phone"pattern="[789][0-9]{9}"
                                    required>
                                    <i class="fas fa-comments b-font"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <i class="fas fa-unlock-alt b-font"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="cpassword" placeholder="Conform Password">
                                <i class="fas fa-unlock-alt b-font"></i>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" id="image" name="image"
                                    placeholder="Upload Image" required>
                                    <i class="fas fa-lock b-font"></i>
                            </div>
                            <div class="form-group">
                                <span class="b-forgot">Forgot your password?</span>
                            </div>
                            <button type="submit" class="sign_up">SignUp</button>
                        </form>
                    </div>
                </div> 

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('.swift').click(function(){
        var signButton = $(this).html();
        console.log(signButton);
        debugger;
        if(signButton == 'Sign In'){
            $('.sign_up').html('Sign In'); // sign up button text change
            $('.sign_in').html('Sign Up'); // sign in button text change
            $('.swift_right').show(); // second logo show
            $('.b-forgot').show(); // forgot option show
            $('.form_title').html('Sign in to Guide'); // form title text change
            $('.b-subtext').html('or use your email account'); // form sub title text change
            $('.user_title').html('Hello, Friend'); // user title text change
            $('.user_subTitle').html('Enter your personal details </br> and start journey with us.'); // user sub title text change
            $('.b-title').css('margin-top','100px'); // user section add margin top in css
            $('.swift_left').hide(); // default logo hide
            $('.username').hide(); // form user field hide
            $('.b-wrapper').addClass('swift_element'); // add reverse
        }else{
            $('.sign_up').html('Sign Up'); // sign up button text change
            $('.sign_in').html('Sign In'); // sign in button text change
            $('.swift_right').hide(); // second logo hide
            $('.b-forgot').hide(); // forgot option hide
            $('.form_title').html('Create Account');
            $('.b-subtext').html('or use your email for registration');
            $('.user_title').html('Welcome Friend');
            $('.user_subTitle').html('To keep Connected with us please </br> login with your personal info.');
            $('.b-title').css('margin-top','0px');
            $('.swift_left').show();
            $('.username').show();
            $('.b-wrapper').removeClass('swift_element');
        }

    })
})


</script>
</body>
</html>

