<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/db.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from admin_signup where username='$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: admin_dashbord.php");
            } 
        }
         
    else{
      ?>
        <script>
        alert("Invalid Credentials");
        </script>
        <?php
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Admin Login</title>
</head>
<style>
*{color: #fff;
}

.bg{
    /* background: url('../img/b.jpg') no-repeat; */
    background: url('img/b.jpg') center center fixed no-repeat;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 656.5px;
}

.form-container{
    border: 0px solid #fcf806;
    padding: 50px 60px;
    margin-top: 20vh;
    -webkit-box-shadow: 0px 1px 13px 5px #000000; 
    box-shadow: 0px 1px 13px 5px #000000;
}
</style>
<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
            <div class="col-md-4 col-sm-4.col-xs-12">
                <form class="form-container"action="/final/admin_login.php" method="post">
                  <h1>Admin Login</h1>
                    <div class="form-group">
                      <label for="username">UserName:</label>
                      <input type="text" class="form-control" id="username"name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" id="password"name="password" placeholder="Password" required>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                    <a href="#">Forget Password</a>
                  </form>
            </div>
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
        </div>
    </div>
</body>
</html>