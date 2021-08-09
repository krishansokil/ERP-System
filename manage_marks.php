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
    <title>Student Marks</title>
</head>
<style>
*{color: black;
}

.bg{
    /* background: url('../img/kk.jpg') center center fixed no-repeat; */
    background-color: pink;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.form-container{
    background-color: powderblue;
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
                <form class="form-container">
             <center> <h1>Student Marks</h1></center>
                  <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required>
                  </div>
                    <div class="form-group">
                      <label>Roll No.</label>
                      <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Roll no." required>
                    </div>
                    <div class="form-group">
                      <label>Branches:</label>
                      <input type="text" class="form-control" id="examplebranch" placeholder="Branch" required>
                    <div class="form-group">
                    <div class="form-group">
                      <label>Semester:</label>
                      <input type="number" class="form-control" id="semester" name="semester" placeholder="Semester" required>
                    </div>
                    <hr>
                    <a href ="./login.php"type="submit" class="btn btn-primary btn-block"style="color: red;" >Show Your Marks</a>
               <center> <div class= "Subject">
                   <label for ="Sname">Subject Name</label><br>
                   <input type="text" id="s1" name="subject1">
                   <input type="text" id="s2" name="subject2">
                   <input type="text" id="s3" name="subject3">
                   <input type="text" id="s4" name="subject4">
                   <input type="text" id="s5" name="subject5">
                   <input type="text" id="s6" name="subject6"><br><br>
                   <label for ="marks">Marks</label><br>
                   <input type="number" id="m1" name="Mark1">
                   <input type="number" id="m2" name="Mark2">
                   <input type="number" id="m3" name="Mark3">
                   <input type="number" id="m4" name="Mark4">
                   <input type="number" id="m5" name="Mark5">
                   <input type="number" id="m6" name="Mark6"><br><br>
                 </div> </center>
                 <a href ="./login.php"type="submit" class="btn btn-primary btn-block"style="color: white;" >Close</a>


                    <!-- <button type="submit" class="btn btn-success btn-block">Login</button> -->
                  
                   
                  </form>
            </div>
            <div class="col-md-4 col-sm-4.col-xs-12"></div>
        </div>
    </div>
</body>
</html>