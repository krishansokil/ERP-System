<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Dashbord</title>
</head>

<body>
    <?php include 'partials/admin_sidebar.php'?>
    <div class="row ">
        <div class="col-sm-4 mt-5">
            <div class=" card text-white bg-success mb-3">
                <div class="card-body">
                    <h3 class="card-title">Students</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `admin_student_signup`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;
          
        ?></h1>
                    <a href="admin_students.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h3 class="card-title">Faculty</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `admin_faculty_signup`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;?>
                    </h1>
                    <a href="admin_faculty.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h3 class="card-title">Students Login Request</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `student_signup`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;
          
        ?></h1>
                    <a href="admin_student_signup1.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class=" card text-white bg-warning mb-3">
                <div class="card-body">
                    <h3 class="card-title">Faculty Login Request</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `faculty_signup`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;?></h1>
                    <a href="admin_faculty_signup1.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h3 class="card-title">Students Attendance</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `student_attendance`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;?></h1>
                    <a href="admin_student_attendance.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class=" card text-white bg-secondary mb-3">
                <div class="card-body">
                    <h3 class="card-title">Marks</h3>
                    <h1 style="text-align:right;">500</h1>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h3 class="card-title">Time Table</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `timetable`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;?></h1>
                    <a href="admin_timetable.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h3 class="card-title">Notes</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `notes`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;?></h1>
                    <a href="admin_notes.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h3 class="card-title">Subject</h3>
                    <h1 style="text-align:right;"><?php
        include 'partials/db.php';
        $sql = "SELECT count(*) FROM `subject`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $total = $row[0];
        echo $total;?></h1>
                    <a href="admin_fill_subject.php" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

</body>

</html>