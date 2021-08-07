<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/db.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $full_name = $_POST["full_name"];
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from admin_faculty_signup where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){ 
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['full_name'] = $full_name;
                header("location: faculty_dashbord.php");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <title>Faculty Login</title>
</head>
<style>
* {
    color: #fff;
}

.bg {
    background: url('img/b.jpg') fixed no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 656.5px;
}

.form-container {
    border: 0px solid #fcf806;
    padding: 50px 60px;
    margin-top: 10vh;
    -webkit-box-shadow: 0px 1px 13px 5px #000000;
    box-shadow: 0px 1px 13px 5px #000000;
}
</style>

<body>
    <div class="container-fluid bg">

        <div class="row">
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
            <div class="col-md-4 col-sm-4.col-xs-12">
                <form class="form-container" action="/final/faculty_login.php" method="post">
                    <h1>Faculty Login</h1>
                    <div class="form-group">
                        <label for="full_name">Name:</label>
                        <input type="text" class="form-control" id="full_name" placeholder="Name" name="full_name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                            pattern=".{6,}" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" required> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                    <hr>
                    <div class="container-fluid">
                        <a href="faculty_signup.php" type="submit" class="btn btn-success btn-block"
                            style="color: white;">Are You new Here Please Signup</a>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
        </div>
    </div>
</body>

</html>