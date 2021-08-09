<?php
$editFormAction = $_SERVER['PHP_SELF']; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/db.php';
    $name = $_POST["name"];
    $rollno = $_POST["rollno"]; 
    $attendance = $_POST["attendance"];
    $faculty_name = $_POST["faculty_name"];
    $lecture=$_POST["lecture"];
            $sql = "INSERT INTO `student_attendance` ( `name`,`rollno`,`faculty_name`,`lecture`,`attendance`,`dt` ) VALUES ('$name','$rollno','$faculty_name','$lecture','$attendance',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
              ?>
               <script>
              alert("Attendance Register Sucessfully");
              </script>
              <?php
              header("location: faculty_fill_attendance.php");
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

    <title>Attendance</title>
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
  <?php include 'partials/faculty_sidebar.php'?>
    <div class="container-fluid bg">
    <?php 
    include 'partials/db.php';
    // $id = (isset($_POST['id']) ? $_POST['id'] : '');
    $existSql = "SELECT * FROM `admin_student_signup` WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){ 
        echo"<div class='row'>
            <div class='col-md-4 col-sm-4.col-xs-12'></div>
            <div class='col-md-4 col-sm-4.col-xs-12'>
                <form class='form-container'action='$editFormAction'method='post'>
                  <h1 style='color: black;'>Fill Attendance</h1>
                  <div class='form-group'>
                      <label for='full_name'style='color: black;'>Name:</label>
                      <input type='text'value='". $row['name']."' class='form-control' id='name' name='name' required readonly>
                    </div>
                    <div class='form-group'>
                      <label for='roll_no'style='color: black;'>Roll No.:</label>
                      <input type='text' value='". $row['rollno']."'class='form-control'name='rollno' id='rollno' required readonly>
                    </div>";
                  }
                  ?>
                  <div class="form-group">
            <label for='lecture' style='color: black;'>Lecture :</label>
            <select name="lecture" id="lecture" class="form" style='color: black;'>
                <option value="Ist" style='color: black;'>Ist</option>
                <option value="IInd" style='color: black;'>IInd</option>
                <option value="IIIrd" style='color: black;'>IIIrd</option>
                <option value="IVth" style='color: black;'>IVth</option>
                <option value="Vth" style='color: black;'>Vth</option>
                <option value="VIth" style='color: black;'>VIth</option>
            </select>
        </div>
                  <?php 
                   $existSql = "SELECT * FROM `admin_faculty_signup` WHERE full_name = '{$_SESSION['full_name']}'";
                  $result = mysqli_query($conn, $existSql);
                  $numExistRows = mysqli_num_rows($result);
                  while($row=mysqli_fetch_assoc($result)){ 
                  
                    echo "<div class='form-group'>
                      <label for='faculty_name'style='color: black;'>Faculty Name:</label>
                      <input type='text' value='".$row['full_name']."'class='form-control'name='faculty_name' id='faculty_name' required readonly>
                    </div>";
                  }
                    ?>
                    <div class='form-group'>
                      <label for='attendance'style='color: black;'>Attendance:</label>
                      <select name='attendance' id='attendance'class='form-control'>
                      <option value='Present'style='color: black;'>Present</option>
                      <option value='Absent' style='color: black;'>Absent</option>
                      </select>
                    </div>
                    <button type='submit' class='btn btn-success btn-block'>Submit</button>
                    <hr>
                  </form>
            </div>
            <div class='col-md-4 col-sm-4.col-xs-12'></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>