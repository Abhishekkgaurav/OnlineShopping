
	<div class="container-fluid">
	
		
            <div class="row" style="background-color:#594463;color:white;">
		
		<div class="col-sm-3"></div>
		<div class="col-sm-6"> <h1>E-Gadgets Store</h1></div>
		<div class="col-sm-3">
			<table>
				<tr style="margin-top:10px;align:right;">
                                    <?php
                             if(isset($_SESSION['name']))
                                 echo "<td colspam=2 style='padding-right: 10px;'>Welcome, ".$_SESSION['name']."</td>";
                             else
                             {
					echo "<td style='padding-right: 10px;'><a style='color: white;' href='sign_in.php'><h4>Log In</h4></a></td>";
					echo "<td><a style='color: white;font-weight:bold;' href='sign_up.php'><h4>Sign Up</h4></a></td>";
                             }
                             ?>
					<td><a href="cart.php"><img style="width:50px;height:50px;" src="images/cart.png"></a></td>
				</tr>
			</table>
			
			
			
		</div>
            </div>

			<div class="row" style="background-color:#594463;">
				<div class="col-sm-8"></div>
				<div class="col-sm-4">
					<form>
				<div>
					
					<input type="text" name="search" value="" placeholder="Search"/>
					<input type="submit" name="searchbutton" value="Search" style="color:black;"/>
				</div>
				
					</form>
				</div>
				
				</div>
			
	</div>
	
	
	
		<div class="navbar navbar-default" style="margin-bottom:0px;">
			<ul class="nav navbar-nav">
				<li><a href="home.php">Home</a></li>
				<li><a href="laptop.php">Laptop</a></li>
				<li><a href="mobile.php">Mobile</a></li>
				<li><a href="camera.php">Camera</a></li>
				<li><a class="dropdown-toggle" data-toggle="dropdown" href="">Member<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php
                                    if(isset($_SESSION['user_email']))
                                    {
                                        echo"<li><a href='profile.php'>Profile</a></li>";
                                        echo"<li><a href='edit_profile.php'>Edit Profile</a></li>";
                                        echo"<li><a href='logout.php'>Log Out</a></li>";
                                    }
                                    else
                                    {
                                        echo"<li><a href='sign_in.php'>Sign In</a></li>";
                                        echo"<li><a href='sign_up.php'>Sign Up</a></li>";
                                    }
                                    ?>
					</ul>
				</li>
				<li><a href="contact_us.php">Contact Us</a></li>
				<li><a href="#">FAQs</a></li>
				<li><a href="#">More Products</a></li>
			</ul>
		</div>

