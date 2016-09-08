<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>iBank Inc:. Personal Banking</TITLE>
		<link rel="icon" type="image/png" href="./images/head-icon.png" />
		<link type="text/css" rel="stylesheet" href="style.css" />
		<link type="text/css" rel="stylesheet" href="style_about.css" />
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

		<div class="about_desc">
			<header class="about">
				<center>About us</center>
			</header>
			<p>
				iBank bridges the gap between your Device and Bank, enabling them to work better together.
				From easily logging-into the bank system, to easily transferring money, and more, iBank saves you time by making what used to be difficult or impossible, easy.
			</p>
			<p id="about_head">
				Headquartered in Mumbai, iBank was founded to make your devices and Bank work together better for you, no matter where in the world you happen to be living.

			</p>

			<br/><br/>
			<div class="dev-image">
				<center>
					<a href="https://in.linkedin.com/in/rushabhwadkar">
						<div class="image-head">
							<img src="./images/Rushabh.png" alt="Rushabh Image"></img>
							<div class="name">Rushabh Wadkar</div>
						</div>
					</a>

					<a href="#">
						<div class="image-head">
							<img src="./images/Swapnil.png" alt="Swapnil Image">
							<div class="name">Swapnil Velunde</div>
						</div>
					</a>
					<a href="#">
						<div class="image-head">
							<img src="./images/Tejas.png" alt="Tejas Image">
							<div class="name">Tejas Zarekar</div>
						</div>
					</a>
					<a href="http://www.facebook.com/kun4lshinde">
						<div class="image-head">
							<img src="./images/Kunal.png" alt="Kunal Image">
							<div class="name">&nbsp;&nbsp;Kunal Shinde</div>
						</div>
					</a>
				</center>
			</div>

			<p>
				<br><center>
					<span style="color: rgba(255,255,255,0.8);">♥<br/>We are the small band of superheroes behind iBank <sup style="font-size: 8px;">&copy;</sup>.</span>
				</center>
			</p>
		</div>

		<div class="footer" style="bottom: -18.5em">	
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