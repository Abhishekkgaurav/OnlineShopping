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
        <div style="background-color:#d3e1ed" class="container-fluid">
            
             <?php
            if(isset($_COOKIE['cart']))
            {
                $x=$_COOKIE['cart'];
                
                $con= mysqli_connect("localhost","root","");
                mysqli_select_db($con,"shopping");
                $qry="select * from product_master where p_id=$x[1]";
                $result=mysqli_query($con,$qry);
                $sum=0;
                echo "<table class='table table-stripped'>";
                echo "<tr>";
                echo "<tr>";
                echo "<th>";
                echo "Product Image";
                echo "</th>";
                echo "<th>";
                echo "Product Name";
                echo "</th>";
                echo "<th>";
                echo "Product Price";
                echo "</th>";
                echo "</tr>";
                while($row= mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td><img src='$row[4]' width='50' height='50'/></td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td><a href='deleteproduct.php?$row[0]'>Delete</a></td>";
                    echo "</tr>";
                    $sum=$sum+row[2];
                }
                echo "</table>";
                echo "<h3 class='text-right'>Total Price= $sum</h3>";
                
            }
            else
            {
                echo "Cart is Empty!!";
            }
            
       
            
        ?>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-2"><a href='buynow.php?$sum'><input type="submit" name='s1' style='margin-left:1200px' value="Buy Now" /></a></div>
                
                <div class="col-sm-4"></div>
            </div>
        </div>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>


