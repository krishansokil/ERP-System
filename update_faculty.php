<?php 
$editFormAction = $_SERVER['PHP_SELF']; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/db.php';
    $id        = $_POST['id'];
    $name      = $_POST["name"];
    $email     = $_POST["email"];
    $phone    = $_POST["mobile"];
    $password  = $_POST["password"];
    $image     = $_POST["image"];
    $date      = $_POST["date"];
    // Check whether this username exists
    // $sql = "UPDATE `admin_student_signup` SET 'id'='$id',`name` = '$name' ,`email`='$email',`rollno`='$rollno',`password`='$password',`dob`='$dob',`mobile`='$mobile',`gender`='$gender',`address`='$address',`state`='$state',`country`='$country',`pincode`='$pincode',`course`='$course',`branch`='$branch',`semester`='$semester',`image`='$image' WHERE `admin_student_signup`.`id`= '$id'";
    $sql = "UPDATE `admin_faculty_signup` SET `id`=$id,`full_name`='$name',`email`='$email',`phone`='$phone',`password`='$password',`image`='$image',`dt`='$date' WHERE `admin_faculty_signup`.`id`='$id'";
            $result = mysqli_query($conn, $sql);
            if ($result){
              ?>
               <script>
              alert("Faculty Data Update Successfull");
              </script>
              <?php
            }
            header("location: admin_faculty.php");
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

    <title>Update Faculty</title>
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
    $existSql = "SELECT * FROM `admin_faculty_signup` WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){ 
        echo"<div class='row'>
            <div class='col-md-4 col-sm-4.col-xs-12'></div>
            <div class='col-md-4 col-sm-4.col-xs-12'>
                <form class='form-container'action='$editFormAction'method='post'enctype='multipart/form-data'>
                  <h1 style='color: black;'>Update Faculty</h1>
                  <div class='form-group'>
                      <label for='id'style='color: black;'>Id No.</label>
                      <input type='text'value='". $row['id']."' class='form-control' id='id' name='id' required readonly>
                    </div>
                  <div class='form-group'>
                      <label for='name'style='color: black;'>Name:</label>
                      <input type='text'value='". $row['full_name']."' class='form-control' id='name' name='name' required >
                    </div>
                    <div class='form-group'>
                      <label for='email'style='color: black;'>Email:</label>
                      <input type='email' value='". $row['email']."'class='form-control'name='email' id='email' required >
                    </div>
                    <div class='form-group'>
                      <label for='mobile'style='color: black;'>Mobile:</label>
                      <input type='number' value='". $row['phone']."'class='form-control'name='mobile' id='mobile' required >
                    </div>
                    <div class='form-group'>
                      <label for='password'style='color: black;'>password:</label>
                      <input type='text' value='". $row['password']."'class='form-control'name='password' id='password' required readonly >
                    </div>
                    <div class='form-group'>
                      <label for='image'style='color: black;'>Image:</label>
                      <input type='text' value='". $row['image']."'class='form-control'name='image' id='image' required readonly>
                    </div>
                    <div class='form-group'>
                      <label for='date'style='color: black;'>Registration Date:</label>
                      <input type='text' value='". $row['dt']."'class='form-control'name='date' id='date' required readonly>
                    </div>";
                  }
                  ?>
                  <button type="submit" class="btn btn-primary btn-block">Update</button>
                  </form>
            </div>
            <div class='col-md-4 col-sm-4.col-xs-12'></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>