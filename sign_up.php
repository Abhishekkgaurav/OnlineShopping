<?php
$msg="";
$pic_info="";
if(isset($_POST['registerbtn']))
{
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $pass=$_POST['user_password'];
    $gen=$_POST['user_gender'];
    $phone=$_POST['user_phone'];
    $add=$_POST['user_address'];
    $coun=$_POST['country'];
    $pic=$_FILES['user_pic']['name'];
    if($_FILES['user_pic']['error']==0)
    {
    $source=$_FILES['user_pic']['tmp_name'];
    $destination=$_SERVER['DOCUMENT_ROOT']."/OnlineShopping/images/upload/".$pic;
    if(move_uploaded_file($source,$destination)>0)
            $pic_info="File Uploaded!!";
        else {
            $pic_info="File not Uploaded!!";
        }
    }
    else{
        $pic_info="File is Corrupted!";
    }
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"shopping");
    $qry="insert into user_master values('$name','$email','$pass','$gen',$phone,'$add','$coun','images/upload/$pic')";
    mysqli_query($con,$qry);
    if(mysqli_affected_rows($con)>0)
        $msg="<font color='green'>Form Submitted!!</font>";
    else 
        $msg="<font color='red'>Form not submitted!!</font>";
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
    <style type="text/css">
		fieldset{background-color: skyblue;padding: 15px 15px 15px 15px;border-radius: 10px; margin-bottom:50px;}
		legend{padding-top: 30px;}
		.form-control{margin-bottom: 5px;}
    </style>
    <script>
            function ValidateForm()
            {
                temp=true;
                s1=document.getElementById("t1").value;
                if(s1=="")
                {
                    temp=false;
                    document.getElementById("t1").style="border-color:red";
                }
                else
                {
                    document.getElementById("t1").style="";
                }
                s1=document.getElementById("t2").value;
                if(s1=="")
                {
                    temp=false;
                    document.getElementById("t2").style="border-color:red";
                }
                else
                {
                    document.getElementById("t2").style="";
                }
                s1=document.getElementById("t3").value;
                if(s2=="")
                {
                    temp=false;
                    document.getElementById("t3").style="border-color:red";
                }
                else
                {
                    document.getElementById("t3").style="";
                }
                s1=document.getElementById("t4").value;
                if(s3=="")
                {
                    temp=false;
                    document.getElementById("t4").style="border-color:red";
                }
                else
                {
                    document.getElementById("t4").style="";
                }
                a1=document.getElementById("t5").checked;
                a2=document.getElementById("t6").checked;
                a3=document.getElementById("t7").checked;
                if(a1==true || a2==true || a3==true)
                {
                    document.getElementById("d1").innerHTML="";
                }
                else
                {
                    temp=false;
                    document.getElementById("d1").innerHTML="Select Gender First";
                }
                s1=document.getElementById("t8").value;
                if(s1=="")
                {
                    temp=false;
                    document.getElementById("t8").style="border-color:red";
                }
                else
                {
                    document.getElementById("t8").style="";
                }
                s1=document.getElementById("t9").innerHTML;
                if(s1=="")
                {
                    temp=false;
                    document.getElementById("t9").style="border-color:red";
                }
                else
                {
                    document.getElementById("t9").style="";
                }
                s1=document.getElementById("t10").value;
                if(s1=="")
                {
                    temp=false;
                    document.getElementById("t10").style="border-color:red";
                }
                else
                {
                    document.getElementById("t10").style="";
                }
                s1=document.getElementById("t11").value;
                if(s1=="")
                {
                    temp=false;
                    document.getElementById("t11").style="border-color:red";
                }
                else
                {
                    document.getElementById("t11").style="";
                }
                return temp;     
            }
        </script>
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
       <div class="row" style="background-color:#d3e1ed">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 ">
                    <form onsubmit="return ValidateForm()" method="post" enctype="multipart/form-data">
	<div class="form-group">
			<fieldset>
				<legend align="center"><font><b>User Sign Up</b></font></legend>
			
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Name</label></div>
				<div class="col-sm-8"><input id="t1" class="form-control" type="text" name="user_name" value="" placeholder="Enter Your Name" /></div>

			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Email</label></div>
				<div class="col-sm-8"><input id="t2" class="form-control" type="email" name="user_email" value="" placeholder="Enter Your Email" /></div>

			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Password</label></div>
				<div class="col-sm-8"><input id="t3" class="form-control" type="Password" name="user_password" value="" placeholder="Enter Password" /></div>

			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Confirm Password</label></div>
				<div class="col-sm-8"><input id="t4" class="form-control" type="Password" name="user_password" value="" placeholder="Confirm Password" /></div>

			</div>
			<div class="row">
				<div class="col-sm-6"><label class="control-label">&nbsp;&nbsp;&nbsp;Gender</label></div>
				<div class="col-sm-6"><input id="t5" type="radio" name="user_gender" value="Male"/><label>Male</label><input type="radio" id="t6" name="user_gender" value="Female"/><label>Female</label><input type="radio" id="t7" name="user_gender" value="Other"/><label>Other</label></div>
                                    <div id="d1" style="color:red"></div>
			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Phone Number</label></div>
				<div class="col-sm-8"><input id="t8" class="form-control" type="number" name="user_phone" value="" placeholder="Phone Number" /></div>

			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Address</label></div>
				<div class="col-sm-8"><textarea id="t9" class="form-control" name="user_address" rows="8" cols="1"></textarea></div>

			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Country</label></div>
				<div class="col-sm-8">
					<select id="t10" class="form-control" name="country">
						<option>India</option>
						<option>Bangladesh</option>
						<option>Nepal</option>
						<option>China</option>
						<option>Afganistan</option>
						<option>Saudi Arabia</option>
						<option>Bhutan</option>
						<option>Shrilanka</option>
						<option>Pakistan</option>
						<option>America</option>
						<option>England</option>

					</select></div>

			</div>
			<div class="row">
				<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;Upload Picture</label></div>
				<div class="col-sm-8"><input id="t11" class="form-control" type="file" name="user_pic" value=""/></div>
                        </div>
				<div class="row">
					<div class="col-sm-3"></div>
				<div class="col-sm-6"><input class="btn btn-primary btn-block" type="reset" name="resetbtn" value="Reset" />
				<input class="btn btn-success btn-block" type="submit" name="registerbtn" value="Register" /></div>
				<div class="col-sm-3"></div>

			</div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php
                                        echo $pic_info;
                                        ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                        echo $msg;
                                        ?>
                                    </div>
                                    
                                </div>

			

			</fieldset>
	</div>
			</form>

		</div>
		<div class="col-sm-3"></div>
		
	</div>
 
    <?php
    include 'footer.php';
    ?>
    </body>
</html>
