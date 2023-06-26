<?php
$img_info="";
$msg="";
if(isset($_POST['submit_btn']))
{
    $pid=$_POST['product_id'];
    $pname=$_POST['product_name'];
    $pprice=$_POST['product_price'];
    $ptype=$_POST['product_type'];
    $img=$_FILES['product_image']['name'];
    if($_FILES['product_image']['error']==0)
    {
        $source=$_FILES['product_image']['tmp_name'];
       $des=$_SERVER['DOCUMENT_ROOT']."/OnlineShopping/images/".$img;
      
       if(move_uploaded_file($source, $des)>0)
               $img_info="Image Uploaded!";
           else {
           $img_info="Image not Uploaded!";    
           } 
    }
 else {
       $msg="Image Corrupted";
    }
     $con=mysqli_connect("localhost","root","");
       mysqli_select_db($con,"shopping");
       $qry="insert into product_master values($pid,'$pname',$pprice,'$ptype','images/$img')";
       mysqli_query($con,$qry);
       if(mysqli_affected_rows($con)>0)
           $msg="Form submitted1";
       else {
       $msg="form not submitted!";    
       }
       mysqli_close($con);
       
       
    
    
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
        <form method="post" enctype="multipart/form-data">
            <div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Product Id</label></div>
				<div class="col-sm-8"><input class="form-control" type="number" name="product_id" value="" placeholder="Enter Product id" /></div>

			</div>
            <div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Product Name</label></div>
				<div class="col-sm-8"><input class="form-control" type="text" name="product_name" value="" placeholder="Enter Product Name" /></div>

			</div>
            <div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Product Price</label></div>
				<div class="col-sm-8"><input class="form-control" type="number" name="product_price" value="" placeholder="Enter Product Price" /></div>

			</div>
            <div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Product Type</label></div>
                                <div class="col-sm-8"><select name="product_type">
                                        <option>Mobile</option>
                                        <option>Laptop</option>
                                        <option>Camera</option>
                                    </select></div>

			</div>
            <div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Product Image</label></div>
				<div class="col-sm-8"><input class="form-control" type="file" name="product_image" value=""/></div>

			</div>
            <div class="row">
				
				<div class="col-sm-12"><input class="form-control btn btn-primary" type="submit" name="submit_btn" value="Add to Database"/></div>

			</div>
            
        </form>
        <div class="row">
            <div class="col-sm-12">
                <?php
                echo $img_info;
                echo $msg;
                ?>
            </div>
            
        </div>
            
       
    <?php
    include 'footer.php';
    ?>
    </body>
</html>
