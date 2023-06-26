<?php
if(isset($_GET['btn']))
{
    $prod_id=$_GET['pid'];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"shopping");
    $qry="select * from product_master where p_id=$prod_id;";
    $result=mysqli_query($con,$qry);
    $arr=mysqli_fetch_array($result);
  
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form>
            <label>Enter Product Id:</label>
            <input type="number" name="pid" value=""/>
            <input type="submit" name="btn" value="See Data"/>
        </form>
        <?php
        if(isset($_GET['btn']))
        {
            echo $arr[1];
            mysqli_close($con);
        } 
        ?>
    </body>
</html>
