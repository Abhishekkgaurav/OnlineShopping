<?php
session_start();
    $msg="";
    if(isset($_POST['s_btn']))
    {
        $username=$_POST['user_id'];
        $password=$_POST['user_password'];
        
        $con= mysqli_connect("localhost","root","");
        mysqli_select_db($con,"shopping");
        $qry="select * from user_master where email='$username' and password='$password'";
        $resultset= mysqli_query($con, $qry);
        $row= mysqli_fetch_array($resultset);
        if(mysqli_num_rows($resultset)>0)
        {
            if(isset($_POST['c_box']))
            {
                setcookie("username",$username,time()+60*60*24);
                setcookie("password",$password,time()+60*60*24);
            }
            $_SESSION['user_email']=$username;
            $_SESSION['name']=$row[0];
            header("Location:home.php");
           
        }
        else
        {
            $msg="LogIn Unsuccessfull :(";
        }
        
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
    <style type="text/css">
        fieldset{background-color: skyblue;padding: 15px 15px 15px 15px;border-radius: 10px; margin-bottom:50px;}
		legend{padding-top: 30px;}
		.form-control{margin-bottom: 15px;}
        </style>
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
    <div class="row" style="background-color:#d3e1ed;">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <form method="post">
        <fieldset>
            <legend>Sign In</legend>
        
        <div class="row">
            <div class="col-sm-4"><label class="control-label">Email or Username:</label></div>
            <div class="col-sm-8"><input class="form-control" type="email" name="user_id" value="" placeholder="Enter Email or Username"/></div>
            
        </div>
        <div class="row">
            <div class="col-sm-4"><label class="control-label">Password:</label></div>
            <div class="col-sm-8"><input class="form-control" type="password" name="user_password" value="" placeholder="Enter your Password"/></div>
            
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8"><input  type="checkbox" name="c_box" value=""/></div>
            
        </div> 
            
        <div class="row">
            
            <div class="col-sm-12"><input class="btn btn-success btn-block" type="submit" name="s_btn" value="Sign In"/></div>
            
        </div>    
        
        </fieldset>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <?php
    include 'footer.php';
    ?>
    </body>
</html>
