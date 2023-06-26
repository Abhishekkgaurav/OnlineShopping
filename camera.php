<?php
session_start(); 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
   
</style>
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
        <div style="background-color:#d3e1ed" class="container-fluid">
            <?php
            $con=mysqli_connect("localhost","root","");
            mysqli_select_db($con,"shopping");
            $qry="select * from product_master where p_type='camera'";
            $result=mysqli_query($con,$qry);
 if(mysqli_num_rows($result)>0)
      {
     $x=0;
     while($arr=mysqli_fetch_array($result))
        {
          if($x==0) 
            echo "<div class='row'>";
            
                echo "<div class='col-sm-3' style='padding:5px 5px 5px 5px;'>";
                echo "<a href='camera_spc.php?p_id=$arr[0]'>";
                echo "<div style='box-shadow:0 3px 3px 0 #d9b6db; border-radius:5px;'>";
                echo "<img  src=$arr[4] width='312px' height='250px'></img>";
                echo "<p align='center' color='blue'>".$arr[1]."</p>";
                echo "<p align='center' color='blue'>".$arr[2]."</p>";
                echo "<p align='center' color='blue'>".$arr[3]."</p>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
                $x++;
          if($x==4)
            echo "</div>";
        }
      }
 else {
     echo "Product Not Found!!!";
      }
            mysqli_close($con);
            ?>
        </div>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>




