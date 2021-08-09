<?php 
$editFormAction = $_SERVER['PHP_SELF']; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/db.php';
    $id        = $_POST['id'];
    $course    = $_POST["course"];
    $branch    = $_POST["branch"];
    $semester  = $_POST["semester"];
    $subject  = $_POST["subject"];
    $name      = $_POST["full_name"];
    // Check whether this username exists
    // $sql = "UPDATE `admin_student_signup` SET 'id'='$id',`name` = '$name' ,`email`='$email',`rollno`='$rollno',`password`='$password',`dob`='$dob',`mobile`='$mobile',`gender`='$gender',`address`='$address',`state`='$state',`country`='$country',`pincode`='$pincode',`course`='$course',`branch`='$branch',`semester`='$semester',`image`='$image' WHERE `admin_student_signup`.`id`= '$id'";
    $sql = "UPDATE `subject` SET `id`=$id,`course`='$course',`branch`='$branch',`semester`='$semester',`subject`='$subject',`full_name`='$name' WHERE `subject`.`id`='$id'";
            $result = mysqli_query($conn, $sql);
            if ($result){
              ?>
<script>
alert("Subject Update Successfull");
</script>
<?php
            }
            header("location: admin_fill_subject.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Update Faculty</title>
</head>
<style>
* {
    color: #fff;
}

.bg {
    background: url('img/kk.jpg') fixed no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
}

.form-container {
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
    $existSql = "SELECT * FROM `subject` WHERE id = {$_GET['id']}";
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
                    <label for='course'style='color: black;'>Course:</label>
                    <select name='course' id='course' class='form-control'>
                    <option value='". $row['course']."'style='color: black;'>". $row['course']."</option>
                    <option value='b.tech'style='color: black;'>b.tech</option>
                      <option value='m.tech'style='color: black;'>m.tech</option>
                      </select>
                  </div>
                  <div class='form-group'>
                    <label for='branch'style='color: black;'>Branch:</label>
                    <select name='branch' id='branch' class='form-control'>
                    <option value='". $row['branch']."'style='color: black;'>". $row['branch']."</option>
                    <option value='Computer Science'style='color: black;'>Computer Science</option>
                    <option value='Mechanical'style='color: black;'>Mechanical</option>
                    <option value='Electrical'style='color: black;'>Electrical</option>
                    <option value='Civil'style='color: black;'>Civil</option>
                      </select>
                  </div>
                  <div class='form-group'>
                    <label for='semseter'style='color: black;'>Semester:</label>
                    <select name='semester' id='semester' class='form-control'>
                    <option value='". $row['semester']."'style='color: black;'>". $row['semester']."</option>
                    <option value='Ist'style='color: black;'>Ist</option>
                    <option value='IInd'style='color: black;'>IInd</option>
                    <option value='IIIrd'style='color: black;'>IIIrd</option>
                    <option value='IVth'style='color: black;'>IVth</option>
                    <option value='Vth'style='color: black;'>Vth</option>
                    <option value='VIth'style='color: black;'>VIth</option>
                    <option value='VIIth'style='color: black;'>VIIth</option>
                    <option value='VIIIth'style='color: black;'>VIIIth</option>
                      </select>
                  </div>
                  <div class='form-group'>
                      <label for='subject'style='color: black;'>Subject:</label>
                      <input type='text' value='". $row['subject']."'class='form-control'name='subject' id='subject' required  >
                    </div>";
                }
                ?>
        <div class='form-group'>
            <label for='subject'style='color: black;'>Faculty Name:</label>
            <select name="full_name" id="full_name" class="form-control">
                <?php 
            include 'partials/db.php';
            $existSql = "SELECT full_name FROM `admin_faculty_signup`";
              $result = mysqli_query($conn, $existSql);
              while($row = mysqli_fetch_assoc($result)){
            
            echo"<option style='color: black;' value='".$row['full_name']."'>".$row['full_name']."</option>";
              }?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>
    <div class='col-md-4 col-sm-4.col-xs-12'></div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>