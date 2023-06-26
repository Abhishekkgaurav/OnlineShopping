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
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
        <div style="background-color:#d3e1ed; padding:50px 0 50px 30px;;" class="container-fluid">
           <?php
           if(isset($_GET['p_id']))
           {
           $pid=$_GET['p_id'];
           
          $con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,"shopping");
          $result=mysqli_query($con, "select * from product_master where P_id=$pid");
          $qry="select * from laptop_spc where p_id=$pid";
         $result1=mysqli_query($con,$qry);
         if(mysqli_num_rows($result)>0)
         {
       
        $arr= mysqli_fetch_array($result);
         $arr1=mysqli_fetch_array($result1);
         echo "<div class='row'>";
         echo "<div class='col-sm-4'>";
         echo "<img src=$arr[4]></img>";
         echo "</div>";
         echo "<div class='col-sm-8'>";
   
         echo "<div class='row'><div class='col-sm-12' style='font-size:25px; font-weight:bold; color:black; font-family:Constantia;'>Specification:</div></div>";
         echo "<div class='row'><div class='col-sm-12'>Processor Generation: $arr1[4]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>SSD: $arr1[5]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>HDD: $arr1[6]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>RAM: $arr1[7]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Graphics Processor: $arr1[8]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Operating System Architecture: $arr1[9]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Operating System: $arr1[10]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Touch: $arr1[11]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Screen Size: $arr1[12]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Warranty: $arr1[13]</div></div>";
         echo "</div>";
         echo "</div>";
     
         }
         mysqli_close($con);
           }
          
           ?>
        </div>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>
