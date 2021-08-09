<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Faculty Profile</title>
</head>

<body>
    <?php include 'partials/student_sidebar.php'?>
    <?php
    include 'partials/db.php';
    $no=0; 
    $sql = "Select * from admin_faculty_signup";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
        while($row=mysqli_fetch_assoc($result)){  
            echo"<div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;margin-top:1rem;'>
            <img class='card-img-top'src='img/".$row['image']."'alt='Faculty Profile'>
            <div class='card-body'>
            <h5 class='card-title'>".$row['full_name']."</h5>
            <button class='btn btn-success' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>More Info</button>
            </div>
            </div>
    </div>
    <div class='collapse' id='collapseExample'>
<div class='card card-body'style='width: 40rem;'>
<table class='table table-dark'>
<tbody>
<tr>
<td>Name</td>
<td>".$row['full_name']."</td>
</tr>
<tr>
<td>Email Id</td>
<td>".$row['email']."</td>
</tr>
<tr>
<td>Phone Number</td>
<td>".$row['phone']."</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
    ";
        }
    ?>   
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