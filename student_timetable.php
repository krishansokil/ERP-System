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


    <title>Time Table</title>

</head>
<style>
.container-fluid {
    margin-top: 10%;
    padding: 20px;
}

.first {
    width: 250px;
    /* margin-top:-30px; */
    margin-left: 30px;
}

.second {
    width: 250px;
    /* margin-top:-30px; */
    margin-left: 25rem;
}

.third {
    width: 250px;
    /* margin-top:-34px; */
    margin-left: 50rem;
}

.fourth {
    width: 250px;
    margin-top: -34px;
    margin-left: 75rem;
}

.submit {
    width: 600px;
    margin-top: 20px;
    margin-left: 16rem;
}
</style>

<body>
    <?php include 'partials/student_sidebar.php'?>
    <div class="container my-4">
        <form action="/final/student_timetable.php" method="POST" enctype="multipart/form-data">
            <div class="first">
                <label>Branch:</label>
                <select name='branch' id='branch' class='form'>
                    <?php 
            include 'partials/db.php';
            $existSql = "SELECT branch FROM `admin_student_signup` WHERE rollno='{$_SESSION['rollno']}'";
              $result = mysqli_query($conn, $existSql);
              while($row = mysqli_fetch_assoc($result)){
            
            echo"<option value='".$row['branch']."'>".$row['branch']."</option>";
              }?>
                </select>
            </div>
            <div class="second">
            <label>Semester:</label>
            <select name="semester" id="semester" class="form">
            <?php 
            include 'partials/db.php';
            $existSql = "SELECT semester FROM `admin_student_signup` WHERE rollno='{$_SESSION['rollno']}'";
              $result = mysqli_query($conn, $existSql);
              while($row = mysqli_fetch_assoc($result)){
            
            echo"<option value='".$row['semester']."'>".$row['semester']."</option>";
              }?>
            </select>
            </div>
            <div class="third">
                <label>Type:</label>
                <select name="type" id="type" class="form">
                    <option value="Class">Class</option>
                    <option value="Internal">Internal</option>
                    <option value="External">External</option>
                    <option value="Practical">Practical</option>
                    <option value="Mid Term">Mid Term</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary submit">Show TimeTables</button>
        </form>
    </div>
    <div class="container">
        <?php 
        include 'partials/db.php';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $branch    = $_POST["branch"];
            $semester  = $_POST["semester"];
            $timetable  = $_POST["type"];
          $sql = "SELECT * FROM `timetable` WHERE `semester` = '$semester' AND `branch` = '$branch' AND `type`='$timetable'";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            echo "
            <img class='profile_img'width='1000px'height='500px'src='img/".$row['image']."'
                                                alt='timetable'>";
    }
}
          ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    });
    </script>
</body>

</html>

</body>

</html>