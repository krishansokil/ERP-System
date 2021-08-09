<?php  
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/db.php';
    $course = $_POST["course"];
    $branch = $_POST["branch"]; 
    $semester = $_POST["semester"];
    $subject = $_POST["subject"];
    $full_name = $_POST["full_name"];
            $sql = "INSERT INTO `subject` ( `course`,`branch`,`semester`,`subject`,full_name ) VALUES ('$course','$branch','$semester','$subject','$full_name')";
            $result = mysqli_query($conn, $sql);
            if ($result){
              ?>
               <script>
              alert("Add Subject Sucessfully");
              </script>
              <?php
            //   header("location: faculty_fill_attendance.php");
            }
}
include 'partials/db.php';
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $sql = "DELETE FROM `subject` WHERE `id` = $sno";
  $result = mysqli_query($conn, $sql);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>Add Subject</title>

</head>
<style>
.container {
    margin-top: 8%;
    padding:20px;
}
.form-group{
    width: 600px;
    margin-top:20px;
    margin-left:40%;
}
.submit{
    width:600px;
    margin-top:20px;
    margin-left:16rem;
}
</style>
<body>
<?php include 'partials/admin_sidebar.php'?>
  <div class="container my-4">
    <form action="/final/admin_fill_subject.php" method="POST">
      <div class="form-group">
        <label for="course">Course</label>
        <select class="form" id="course" name="course" >
        <option value="B.tech">b.tech</option>
        </select>
      </div>
      <div class="form-group">
            <label>Branch:</label>
            <select name="branch" id="branch" class="form">
                <option value="Computer Science">Computer Science</option>
                <option value="Mechanical">Mechanical</option>
                <option value="Electrical">Electrical</option>
                <option value="Civil">Civil</option>
            </select>
        </div>
        <div class="form-group">
            <label>Semester:</label>
            <select name="semester" id="semester" class="form">
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
        <label>Subject:</label>
        <input type="text"name="subject"id="subject" required>
        </div>
        <div class="form-group">
        <label>Faculty Name:</label>
            <select name="full_name" id="full_name" class="form">
            <?php 
            include 'partials/db.php';
            $existSql = "SELECT full_name FROM `admin_faculty_signup`";
              $result = mysqli_query($conn, $existSql);
              while($row = mysqli_fetch_assoc($result)){
            
            echo"<option value='".$row['full_name']."'>".$row['full_name']."</option>";
              }?>
            </select>
        </div>
      <button type="submit" class="btn btn-primary submit">Add Subject</button>
    </form>
  </div>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Course</th>
          <th scope="col">Branch</th>
          <th scope="col">Semester</th>
          <th scope="col">Subject</th>
          <th scope="col">Faculty Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include 'partials/db.php';
        $existSql = "SELECT * FROM `subject`";
          $result = mysqli_query($conn, $existSql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['course'] . "</td>
            <td>". $row['branch'] . "</td>
            <td>". $row['semester'] . "</td>
            <td>". $row['subject'] . "</td>
            <td>". $row['full_name'] . "</td>
            <td><a class=' btn btn-sm btn-success' href='update_subject.php?id=". $row['id']." '>Update</a>
            <button class='delete btn btn-sm btn-danger' id=d".$row['id'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this Subject!")) {
          console.log("yes");
          window.location = `/final/admin_fill_subject.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>
