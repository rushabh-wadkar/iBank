<?php
	require './php_script/validate.php';
	
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
			<div class="logintab" style="background-color: #007fff;">
				LOGIN
			</div>

			<a href="register.php" alt="Register">
					<div class="registertab">
						REGISTER
					</div>
			</a>

			<div class="about_tab">
				<ul id="menu-nav">
					<li> &nbsp;ABOUT
							<ul>
								<a href="about-company.php"><li>About Company</li></a>
								<a href="about-dev.php"><li>About Developers</li></a>
								<a href="contact-us.php"><li>Contact us</li></a>
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

		<div class="form_css">
			<center>
				<img src="./images/login13.png" alt="login_logo"></img>
				<br/>
				<div class="login_css">
					<form action="" method="POST" name="login_validate">
						Account Number : <input type="text" class="user_id" name="acc_id" placeholder="Enter Username" maxlength="10" size="28"></input>
						<br/><br/>
						Email ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" class="user_id" name="user_name" placeholder="Enter Username" maxlength="30" size="28"></input>
						<br/><br/>
						Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" class="pass_id" name="pass_key" placeholder="Enter Password" maxlength="20" size="28"></input>

						<br/><br/><br>
						<input type="submit" class="submit_id" name="login_submit" value="Login"></input>
					</form>
				</div>
			</center>
		</div>

		<div class="footer">	
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