<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>iBank Inc:. Personal Banking</TITLE>
		<link rel="icon" type="image/png" href="./images/head-icon.png" />
		<link type="text/css" rel="stylesheet" href="style.css" />
		<link type="text/css" rel="stylesheet" href="style_about.css" />

		<link type="text/css" rel="stylesheet" href="contact.css" />
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

		<div class="about_desc" style="margin-top: 1.5em;height: 14em; border-radius: 55px; box-shadow: 4px 4px 18px black">
			<header class="about" style="margin-bottom: 40px;">
				<center>Contact us</center>
			</header>
			<div class="dev-image_contact">
				<center>
					<a href="mailto:admin@ibank.com">
						<div class="image-head-contact">
							<img src="./images/mail.png" alt="Email"></img>
						</div>
					</a>

					<a href="http://www.facebook.com">
						<div class="image-head-contact">
							<img src="./images/facebook.png" alt="Facebook">
						</div>
					</a>
					<a href="https://www.plus.google.com/">
						<div class="image-head-contact">
							<img src="./images/google.png" alt="google">
						</div>
					</a>
					<a href="http://www.twitter.com">
						<div class="image-head-contact">
							<img src="./images/twitter.png" alt="twitter">
						</div>
					</a>
				</center>
			</div>

		</div>

		<div class="footer" style="bottom: 0em">	
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