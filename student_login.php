<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/db.php';
    $rollno = $_POST["rollno"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from admin_student_signup where rollno='$rollno'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){ 
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['rollno'] = $rollno;
                header("location: student_dashbord.php");
            } 
            else{
                ?>
                <script>
        alert("Invalid Credentials");
        </script>
        <?php
            }
        }
        
    } 
    else{?>
        <script>
        alert("Invalid Credentials");
        </script>
        <?php
    }
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap');
body {
  margin: 0;
  padding: 0; 
  font-family: 'Poppins', sans-serif;
} 
.bg{
  background:url(img/1.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  min-height:100vh;
}
.bg::before{
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width:25%;
  height:100%;
  background:#000;
  opacity: 0.4;
}
.form{
  position:absolute;
  top:50%;
  left:25%;
  transform:translate(-50%,-50%);
  width:350px;
  min-height: 400px;
  background:#fff;
  box-shadow: 0 15px 50px rgba(0,0,0,0.5);
  padding:50px;
  box-sizing: border-box;
  border-radius: 12px;
}
.form h2{
  color:#777;
  margin:0 0 40px;
  padding:0;
}
.form .input-box{
  position:relative;
  margin:20px 0;
}
.form .input-box input{
  width:100%;
  font-size: 16px;
  border:none;
  border-bottom:2px solid #777;
  outline:none;
  padding:10px;
  padding-left:30px;
  box-sizing: border-box;
  font-weight: 700;
  color:#777;
}
.form .input-box input:focus,
.form .input-box input:valid{
  border-bottom-color:#5656db;
}
.form .input-box .fa{
  position:absolute;
  top:8px;
  left:5px;
  font-size: 18px;
  color:#777;
}
.form .input-box input[type="submit"]{
  border:none;
  cursor: pointer;
  background:#5656db;
  color:#fff;
  font-weight: bold;
  transition:0.5s;
  border-radius: 8px;
}
.form .input-box input[type="submit"]:hover,
.form a:hover{
  background:#3030ce;
}
.form a{
  text-decoration: none;
  color:#777;
  margin-top:20px;
  font-weight: bold;
  display: inline-block;
  transition:0.5s;
}

@media (max-width:767px){
  .bg::before{
    width:100%;
  }
  .form{
    left:50%;
  }
}
</style>
<body>
     <div class="bg"></div>
     <div class="form">
     <form class="form-container"action="/final/student_login.php" method="post">
         <h2>Sign In</h2>
         <div class="input-box">
           <i class="fa fa-user"></i>
           <input type="text" name="rollno" placeholder="Roll No." required>
         </div>
         <div class="input-box">
          <i class="fa fa-unlock-alt"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-box"> 
          <input type="submit" name="Sign-in" value="Login">
        </div>
        <!-- <a href="#">Forget Password</a> -->
        <a href ="student_signup.php"type="submit" class="btn btn-success btn-block" >Are You new Here Please Signup</a>
       </form>
     </div>
</body>
</html>

