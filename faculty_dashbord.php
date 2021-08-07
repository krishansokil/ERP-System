<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <style>
*{color: #fff;
}

.bg{
    background: url('img/b.jpg') fixed no-repeat;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 590px;
}
</style>
  <body>
  <?php include 'partials/faculty_sidebar.php'?>
  <?php
include 'partials/db.php'; 
$sql = "Select * from admin_faculty_signup WHERE full_name='{$_SESSION['full_name']}'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){  
    echo "<img class='profile_img'width='1200px'height='600px'src='img/".$row['image']."'
    alt='Faculty Profile'>";
  }
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>