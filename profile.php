<?php
session_start();
if(!isset($_SESSION['user_email']))
{
    header("Location:sign_in.php");
}


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
        <div style="background-color:#d3e1ed" class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    $email=$_SESSION['user_email'];
                    
                    $con= mysqli_connect("localhost","root","");
                    mysqli_select_db($con,"shopping");
                    $qry="select * from user_master where email='$email'";
                    $resultset=mysqli_query($con, $qry);
                    $row= mysqli_fetch_array($resultset);
                    echo "<img src='$row[7]' width='200px'/>";
                    echo "<table class=table table-stripped>";
                    echo "<tr><th>Name</th><td>$row[0]</td></tr>";
                    echo "<tr><th>Email Id</th><td>$row[1]</td></tr>";
                    echo "<tr><th>Password</th><td>$row[2]</td></tr>";
                    echo "<tr><th>Gender</th><td>$row[3]</td></tr>";
                    echo "<tr><th>Phone No</th><td>$row[4]</td></tr>";
                    echo "<tr><th>Address</th><td>$row[5]</td></tr>";
                    echo "<tr><th>Country</th><td>$row[6]</td></tr>";
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>


