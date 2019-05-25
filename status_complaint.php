<?php
session_start();
if (isset($_SESSION['id']) && $_SESSION['role'] == 'student' || $_SESSION['role'] == 'staff'){

} else{
    header('Location: login.php');
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dataTables.min.css">

    <title>Status Complaint</title>
</head>
<body>
<div class="w3-center">
    <img src="http://tahfizselangor.unisel.edu.my/unisel.png" alt="Universiti Selangor" class="top-logo">
    <img src="http://hafizhizers.000webhostapp.com/eComplaint/img/icon.JPG" alt="" class="top-logo">
</div>
<br>
<div class="w3-container">
    <div class="w3-bar w3-light-grey w3-border w3-card-2">
        <a href="dashboard.php" class="w3-bar-item w3-button w3-border-right">Home</a>
        <a href="reg_complaint.php" class="w3-bar-item w3-button w3-border-right">Register Complaint</a>
        <a href="status_complaint.php" class="w3-bar-item w3-button w3-border-right w3-gray">Status Complaint</a>
        <a href="help1.php" class="w3-bar-item w3-button w3-border-right">Bantuan</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-right w3-border-left">Logout</a>
    </div>
    <br>

</div>
<div class="w3-container">
    <div class="w3-cell-row">

        <div class="w3-container w3-cell">

            <table class="w3-table w3-table-all w3-bordered" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>complaint no</th>
                    <th>name</th>
                    <th>no id</th>
                    <th>jawatan</th>
                    <th>fakulti</th>
                    <th>no tel</th>
                    <th>bangunan</th>
                    <th>status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">bj00001</a></td>
                    <td>amir</td>
                    <td>3164004561</td>
                    <td>student</td>
                    <td>FASBIO</td>
                    <td>0122236014</td>
                    <td>F1-GF-U4 (2)</td>
                    <td>pending</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="w3-container w3-cell" style="width: 200px;">

            <ul class="w3-ul">
                <li><a href="#"><img
                            src="https://cdn1.iconfinder.com/data/icons/seo-internet-marketing-4-3/64/x-01-2-512.png"
                            width="30px" height="30px" alt="">Maklum Balas</a></li>
                <li><a href="#"><img src="https://static.thenounproject.com/png/461886-200.png" alt="" width="30px"
                                     height="30px">Manual</a></li>
            </ul>

        </div>
    </div>


    <br>
    <?php require_once "include/footer.php"; ?>

</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/dataTables.min.js"></script>
<script>
    $(document).ready(function (){
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    });
</script>

</html>