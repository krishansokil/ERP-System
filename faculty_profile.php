<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profile</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <style>
    body {
        background: linear-gradient(to left, #33ccff, #ff99cc);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        padding: 0;
        margin: 0;
        font-family: 'Lato', sans-serif;
        color: #000;
    }

    .student-profile .card {
        border-radius: 10px;
        margin-top: 6rem;
    }

    .student-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #ccc;
        border-radius: 50%;
    }

    .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .student-profile .card p {
        font-size: 16px;
        color: #000;
    }

    .student-profile .table th,
    .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
    }
    </style>
</head>

<body>
    <?php include 'partials/faculty_sidebar.php'?>
    <div class="ScriptTop">
        <div class="rt-container">
            <div class="col-rt-4" id="float-right">

                <!-- Ad Here -->

            </div>
        </div>
    </div>


    <?php
include 'partials/db.php'; 
$sql = "Select * from admin_faculty_signup WHERE full_name='{$_SESSION['full_name']}'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){  
    echo "<section>
        <div class='rt-container'>
            <div class='col-rt-12'>
                <div class='Scriptcontent'>

                    <!-- Student Profile -->
                    <div class='student-profile py-5'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-4'>
                                    <div class='card shadow-sm'>
                                        <div class='card-header bg-transparent text-center'>
                                            <img class='profile_img'width='100px'height='100px'src='img/".$row['image']."'
                                                alt='Faculty Profile'>
                                            <h3>".
                                                  $row['full_name']
                                                  
                                                  ."</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class='col-lg-8'>
                                    <div class='card shadow-sm'>
                                        <div class='card-header bg-transparent border-0'>
                                            <h3 class='mb-0'><i class='far fa-clone pr-1'></i>General Information</h3>
                                        </div>
                                        <div class='card-body pt-0'>
                                            <table class='table table-bordered'>
                                            <tr>
                                                <th width='30%'>Email.</th>
                                                <td width='2%'>:</td> 
                                                <td>". $row['email']."</td>
                                                </tr> 
                                                <tr>
                                                    <th width='30%'>Phone Number</th>
                                                    <td width='2%'>:</td>
                                                    <td>". $row['phone']."</td>
                                                </tr> 
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->

                </div>
            </div>
        </div>
    </section>";
  }
?>

</body>

</html>