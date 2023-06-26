<?php
if(isset($_GET['send']))
{
    $name=$_GET['user_name'];
    $email=$_GET['user_email'];
    $phone=$_GET['user_phone'];
    $message=$_GET['user_message'];
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"shopping");
    $qry="insert into contact values('$name','$email',$phone,'$message')";
    mysqli_query($con,$qry);
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
		.form-control{margin-bottom: 30px;}
		.control-label{margin-bottom: 30px;}
		fieldset{background-color: skyblue;padding: 15px 15px 15px 15px;border-radius: 10px; margin-bottom:50px;}
		legend{padding-top: 30px;}
</style>
    </head>
    <body>
    <?php
    include 'header.php';
    ?>
        <div class="row" style="background-color: #d3e1ed;">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<fieldset>
				<legend align=center><b>Contact Us</b></legend>
				<div class="row">
					<div class="col-sm-4">
						<i>
							<br><br><br><br>
							&nbsp;&nbsp;&nbsp;Company: E-Gadgets store pvt ltd.<br>
							&nbsp;&nbsp;&nbsp;E-mail: info@egadgetsstore.com<br>
							&nbsp;&nbsp;&nbsp;Address: Hathua, Gopalganj, 841428<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bihar
						</i>
					</div>
					<div class="col-sm-8">
						<form>
						<div class="row">
							<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Name:</label></div>
							<div class="col-sm-8"><input class="uname form-control" type="text" name="user_name" value="" placeholder="Enter Your Name" /></div>
						</div>
						<div class="row">
							<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;E-mail:</label></div>
							<div class="col-sm-8"><input class="form-control" type="email" name="user_email" value="" placeholder="Enter Your E-mail" /></div>
						</div>
						<div class="row">
							<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Phone:</label></div>
							<div class="col-sm-8"><input class="form-control" type="number" name="user_phone" value="" placeholder="Enter Your Phone No." /></div>
						</div>
						<div class="row">
							<div class="col-sm-4"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Message:</label></div>
							<div class="col-sm-8"><textarea cols="1" rows="10" class="form-control" name="user_message" placeholder="Leave Your Message Here!"></textarea></div>
						</div>
						<div class="row">
							<div class="col-sm-7"></div>
							<div class="col-sm-3"><input  class="submitbtn btn btn-primary" type="submit" name="send" value="Send"></div>
							<div class="col-sm-2"></div>
						</div>

						</form>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="col-sm-2"></div>
		
	</div>
    <?php
    include 'footer.php';
    ?>
        <script src="contact.js"></script>
    </body>
</html>


