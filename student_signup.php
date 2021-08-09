<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'partials/db.php';
  $msg = "";
    $name = $_POST["name"];
    $email     = $_POST["email"];
    $rollno    = $_POST["rollno"];
    $password  = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $dob       = $_POST["dob"];
    $mobile    = $_POST["mobile"];
    $gender    = $_POST["gender"];
    $address   = $_POST["address"];
    $state     = $_POST["state"];
    $country   = $_POST["country"];
    $pincode   = $_POST["pincode"];
    $course    = $_POST["course"];
    $branch    = $_POST["branch"];
    $semester    = $_POST["semester"];
    $image     = $_FILES['image']['name'];
    // $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
    $target = "img/".basename($image);
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `student_signup` WHERE rollno = '$rollno'";
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
        if(($password == $cpassword)){
          $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `student_signup` ( `name`,`email`,`rollno`,`password`,`dob`,`mobile`,`gender`,`address`,`state`,`country`,`pincode`,`course`,`branch`,`semester`,`image` ) VALUES ('$name','$email','$rollno','$hash','$dob','$mobile','$gender','$address','$state','$country','$pincode','$course','$branch','$semester','$image')";
            $result = mysqli_query($conn, $sql);
            if ($result){
              ?>
               <script>
              alert("Your Request has Been Accepted ! Please Login After 2 Days");
              </script>
              <?php
            }
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Registration Form</title>
</head>
<style>
*{color: black;
}

.bg{
    background: url('img/kk.jpg') center center fixed no-repeat;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.form-container{
    border: 0px solid #fcf806;
    padding: 50px 60px;
    margin-top: 10vh;
    margin-bottom: 10vh;s
    -webkit-box-shadow: 0px 1px 13px 5px #000000; 
    box-shadow: 0px 1px 13px 5px #000000;
}
</style>

<body>
    <div class="container-fluid bg">
  
        <div class="row">
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
            <div class="col-md-4 col-sm-4.col-xs-12">
                <form class="form-container" action="/final/student_signup.php" method="post" enctype="multipart/form-data">
                  <h1>Register Here</h1>
                  <div class="form-group">
                    <label> Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="form-group">
                      <label>Roll No.</label>
                      <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Roll no." required>
                    </div>
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" id="password"name="password" placeholder="Password" pattern=".{6,}" required>
                    </div>
                    <div class="form-group">
                      <label for="cpassword">Confirm Password:</label>
                      <input type="password" class="form-control" id="cpassword"name="cpassword" placeholder="Confirm Password" pattern=".{6,}" required>
                    </div>
                    <div class="form-group">
                      <label>Date of Birth:</label>
                      <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                      <label>Mobile Number:</label>
                      <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Valid Phone Number"pattern="[789][0-9]{9}" required>
                    </div>
                    <div class="form-group">
                      <label>Gender:</label>
                      <select name="gender" id="gender" class="form-control">
                      <option value="">Select a gender...</option>
                      <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Address:</label>
                      <textarea class="form-control" rows="5" cols="40" placeholder="Address"name="address"id="address" required></textarea> 
                    </div>
                    <div class="form-group">
                      <label>State:</label>
                      <select name="state" id="state" name="state"class="form-control">
                        <option value="">Select a state...</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        </select> 
                    </div>
                    <div class="form-group">
                      <label>Country:</label>
                      <select name="country" id="country"name="country" class="form-control">
                        <option value="">Select a country...</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        </select> 
                    </div>
                    <div class="form-group">
                      <label>Pincode:</label>
                      <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required> 
                    </div>
                    <div class="form-group">
                      <label>Courses:</label>
                      <select name="course" id="course" class="form-control">
                      <option value="B.tech">B.tech</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Branch:</label>
                      <select name="branch" id="branch" class="form-control">
                      <option value="Computer Science">Computer Science</option>
                      <option value="Mechanical">Mechanical</option>
                      <option value="Electrical">Electrical</option>
                      <option value="Civil">Civil</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Semester:</label>
                      <select name="semester" id="semester" class="form-control">
                      <option value="Ist">Ist</option>
                      <option value="IInd">IInd</option>
                      <option value="IIIrd">IIIrd</option>
                      <option value="IVth">IVth</option>
                      <option value="Vth">Vth</option>
                      <option value="VIth">VIth</option>
                      <option value="VIIth">VIIth</option>
                      <option value="VIIIth">VIIIth</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Studet Image:</label>
                      
                      <input type="file" class="form-control" id="image" name="image" placeholder="Upload Image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">SignUp</button>
                    <hr>
                    <a href ="student_login.php"type="submit" class="btn btn-primary btn-block"style="color: white;" >Already Have a Account Please Login</a>
                  </form>
            </div>
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
        </div>
    </div>
</body>
</html>
