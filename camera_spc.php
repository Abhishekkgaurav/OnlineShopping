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
          $qry="select * from camera_spc where p_id=$pid";
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
   
         echo "<div class='row'><div class='col-sm-12 '>Product Name: $arr[1]</div></div><div class='row'><div class='col-sm-12'>Description:</div></div><div class='row'><div class='col-sm-12'>Camera Brand: $arr1[1]</div></div><div class='row'><div class='col-sm-12'>Price: $arr[2]</div></div><div class='row' style='margin-top:10px'><div class='col-sm-2'><a href='cartlouge.php?id=$pid?page=camera_spc'><input type='Submit' name='n1' style='background-color:#c6d636' value='Add TO Cart'/></a></div><div class='col-sm-2'><a href='buynow.php?id=$pid'><input type='Submit' name='21' style='background-color:#f0a23c' value='BUY NOW'/></a></div><div class='col-sm-8'></div></div> </div>";
        echo "<div class='row' style='padding-left:45px;'>";
            
            echo "<div class='col-sm-12' style='font-size:25px; font-weight:bold; color:black; font-family:Constantia;'>Specification</div>";
            
            echo "<div class='row'><div class='col-sm-12'>Effective Pixels: $arr1[2]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Sensor Type: $arr1[3]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Optical Zoom: $arr1[4]</div></div>";
            echo "<div class='row'><div class='col-sm-12'>Warranty: $arr1[5]</div></div>";
            
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


