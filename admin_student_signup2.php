<?php 
$editFormAction = $_SERVER['PHP_SELF']; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/db.php';
    $rollno    = $_POST["rollno"];
    $email = $_POST["email"];

    // Check whether this username exists
    $existSql = "SELECT * FROM `admin_student_signup` WHERE rollno = '$rollno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
      ?>
              <script>
              alert("Roll No. Already Exists ! Please try new");
              </script>
              <?php
        // $exists = true;
    }
    else{
        // $exists = false; 
          // $hash = password_hash($password, PASSWORD_DEFAULT);
          //   $sql = "INSERT INTO `admin_student_signup` ( `name`,`email`,`rollno`,`password`,`dob`,`mobile`,`gender`,`address`,`state`,`country`,`pincode`,`course`,`branch`,`semester`,`image` ) VALUES ('$name','$email','$rollno','$hash','$dob','$mobile','$gender','$address','$state','$country','$pincode','$course','$branch','$semester','$image')";
          $sql = " INSERT INTO `admin_student_signup` SELECT * FROM `student_signup` WHERE rollno = '$rollno'";
            $result = mysqli_query($conn, $sql);
            if ($result){
              $query = "DELETE FROM `student_signup` WHERE rollno = '$rollno'";
              $result1 = mysqli_query($conn, $query);
              if ($result1)
              {
              $to_email = $email;
              $subject = "Account Verified Succesfull";
              $body = "Your Account is Verification Successfully Now you can Login Your Crediantials  Roll No.=$rollno";
              $headers = "From: manishgoyal91298@gmail.com";
              
              if (mail($to_email, $subject, $body, $headers)) {
                  echo "Email successfully sent to $to_email...";
              } else {
                  echo "Email sending failed...";
              }
            }
            header("location: admin_student_signup1.php");
          }
        else
        {
          ?>
          <script>
          alert("Password Does not Match ! Please Check the Password and Try again");
          </script>
          <?php
        }
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Student Signup</title>
  </head>
  <style>
*{color: #fff;
}

.bg{
    background: url('img/kk.jpg') fixed no-repeat;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
}

.form-container{
    color: black;
    border: 0px solid #fcf806;
    padding: 50px 60px;
    margin-top: 10vh;
    -webkit-box-shadow: 0px 1px 13px 5px #000000; 
    box-shadow: 0px 1px 13px 5px #000000;
}
</style>
  <body>
  <?php include 'partials/admin_sidebar.php'?>
    <div class="container-fluid bg">
    <?php 
    include 'partials/db.php';
    // $id = (isset($_POST['id']) ? $_POST['id'] : '');
    $existSql = "SELECT * FROM `student_signup` WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){ 
        echo"<div class='row'>
            <div class='col-md-4 col-sm-4.col-xs-12'></div>
            <div class='col-md-4 col-sm-4.col-xs-12'>
                <form class='form-container'action='$editFormAction'method='post'enctype='multipart/form-data'>
                  <h1 style='color: black;'>Accept Student</h1>
                  <div class='form-group'>
                      <label for='name'style='color: black;'>Name:</label>
                      <input type='text'value='". $row['name']."' class='form-control' id='name' name='name' required >
                    </div>
                    <div class='form-group'>
                      <label for='email'style='color: black;'>Email:</label>
                      <input type='email' value='". $row['email']."'class='form-control'name='email' id='email' required >
                    </div>
                    <div class='form-group'>
                      <label for='rollno'style='color: black;'>Roll No.:</label>
                      <input type='text' value='". $row['rollno']."'class='form-control'name='rollno' id='rollno' required >
                    </div>
                    <div class='form-group'>
                <label for='password'style='color: black;'>Password</label>
                <input type='text' value='". $row['password']."'class='form-control'name='password' id='password' required Readonly>
              </div>
                    <div class='form-group'>
                      <label for='dob'style='color: black;'>DOB:</label>
                      <input type='date' value='". $row['dob']."'class='form-control'name='dob' id='dob' required >
                    </div>
                    <div class='form-group'>
                      <label for='mobile'style='color: black;'>Mobile:</label>
                      <input type='number' value='". $row['mobile']."'class='form-control'name='mobile' id='mobile' required >
                    </div>
                    <div class='form-group'>
                    <label for='gender'style='color: black;'>Mobile:</label>
                    <input type='text' value='". $row['gender']."'class='form-control'name='gender' id='gender' required >
                  </div>
                    <div class='form-group'>
                      <label for='address'style='color: black;'>Address:</label>
                      <input type='text' value='". $row['address']."'class='form-control'name='address' id='address' required >
                    </div>
                    <div class='form-group'>
                      <label for='state'style='color: black;'>State:</label>
                      <input type='text' value='". $row['state']."'class='form-control'name='state' id='state' required >
                    </div>
                    <div class='form-group'>
                      <label for='country'style='color: black;'>Contury:</label>
                      <input type='text' value='". $row['country']."'class='form-control'name='country' id='country' required >
                    </div>
                    <div class='form-group'>
                      <label for='pincode'style='color: black;'>Pincode:</label>
                      <input type='text' value='". $row['pincode']."'class='form-control'name='pincode' id='pincode' required >
                    </div>
                    <div class='form-group'>
                    <label for='course'style='color: black;'>Course</label>
                    <input type='text' value='". $row['course']."'class='form-control'name='course' id='course' required >
                  </div>
                  <div class='form-group'>
                  <label for='branch'style='color: black;'>Branch</label>
                  <input type='text' value='". $row['branch']."'class='form-control'name='branch' id='branch' required >
                </div>
                <div class='form-group'>
                <label for='semester'style='color: black;'>Semester</label>
                <input type='text' value='". $row['semester']."'class='form-control'name='semester' id='semester' required >
              </div>
              <div class='form-group'>
                <label for='image'style='color: black;'>Mobile:</label>
                <input type='text' value='". $row['image']."'class='form-control'name='image' id='image' >
              </div>";
                  }
                  ?>
                  <button type="submit" class="btn btn-primary btn-block">Accept</button>
                  </form>
            </div>
            <div class='col-md-4 col-sm-4.col-xs-12'></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>