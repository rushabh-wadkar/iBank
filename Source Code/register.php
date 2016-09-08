<?php
	require './php_script/register_into.php';
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>iBank Inc:. Personal Banking</TITLE>
		<link rel="icon" type="image/png" href="./images/head-icon.png" />
		<link type="text/css" rel="stylesheet" href="style.css" />
	</HEAD>
	<BODY>
		<div class="header">
			<div class="headerlogo">
				<img src="./images/header-logo.png" alt="LOGO" style="height: 80px; width: 80px;" ></img>
			</div>
			<div class="headername">
				iBANK.
			</div>
			<div class="headerDesc">
				The Only Bank You Can Trust.
			</div>
			<a href="index.php" alt="Home Page">
				<div class="hometab">
					HOME
				</div>
			</a>
			<a href="login.php" alt="login">
				<div class="logintab">
					LOGIN
				</div>
			</a>
			<a href="register.php" alt="Register">
					<div class="registertab" style="background-color: #007fff;">
						REGISTER
					</div>
			</a>

			<div class="about_tab">
				<ul id="menu-nav">
					<li> &nbsp;ABOUT
							<ul>
								<li><a href="about-company.php">About Company</a></li>
								<li><a href="about-dev.php">About Developers</a></li>
								<li><a href="contact-us.php">Contact us</a></li>
							</ul>
					</li>
				</ul>
			</div>
		</div>


		<div class="register_desc">
			<p class="desc_main">One account is all you need</p>
			<br/>
			<p>A single username and password gets you into everything.</p>
			<br/>
			<center><img src="./images/Desc_logo.png" style="height: 80px; width: 80px;" /></center>
		</div>


		<div class="register_css">
			<center><br/><br/><img src="./images/register.png" style="height: 80px; width: 80px;" /></center>

			<div class="register_form_wrapper">
				<p style="font-size: 35px; color: white; text-shadow: 2px 2px 5px #333333;margin-left: 20%;">Register Yourself</p>
				<form action="" method="POST" class="register_form">
					<br/><br/>
					Name
					<br/>
					<input type="text" required class="register_input" name="first_name" placeholder="First" ></input>
					<input type="text" required class="register_input" name="last_name" placeholder="Last" style="margin-left: 10px;" ></input>


					<br/><br/>
					Enter Email ID
					<br/>
					<input type="text" required class="register_input" name="email_id" placeholder="Email Address" size="47.50" ></input>

					<br/><br/>
					Create a Password
					<br/>
					<input type="password" required class="register_input" name="password1" placeholder="Enter Password" maxlength="30" size="47.50" ></input>

					<br/><br/>
					Confirm your Password
					<br/>
					<input type="password" required class="register_input" name="password2" placeholder="Confirm Password" maxlength="30" size="47.50" ></input>


					<br/><br/>
					Mobile Phone
					<br/>
					<input type="text" required class="register_input" name="mobile_no" maxlength="10" placeholder="(+91) -" size="47.50" ></input>

					<br/><br/>
					<input type="submit" class="register_id" name="register" value="Register" name="reg"></input>
				</form>
			</div>
		</div>

		<div class="footer" style="bottom: -24em;">	
			<div class="footer_elements">
				<ul>
					<li style="margin-left: 10px;float: left; margin-top: 19px;"><?php
							$user_ip = $_SERVER['REMOTE_ADDR'];
							echo 'Your IP ADDRESS : '.$user_ip;
						?>
					</li>
					<li> While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.
						<br/>
						&copy; Copyright 1999-2015 by iBank.Ltd. &reg; All Rights Reserved.
					</li>
				<ul>
			</div>
		</div>
	</BODY>
</HTML>