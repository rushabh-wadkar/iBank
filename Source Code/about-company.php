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

		<div class="about_comp_desc" style="height: 88em;">
			<header class="about">
				<center>About Company</center>
			</header>
			<p>
				iBank is India's largest private sector bank with total assets of Rs. 6,461.29 billion (US$ 103 billion) at March 31, 2015 and profit after tax Rs. 111.75 billion (US$ 1,788 million) for the year ended March 31, 2015. iBank currently has a network of 4,050 Branches and 12,890 ATM's across India.
			</p>

			<header class="about">
				<center>History</center>
			</header>
			<p>
				iBank was originally promoted in 1994 by iBank Limited, an Indian financial institution, and was its wholly-owned subsidiary.
			</p>

			<header class="about">
				<center>iBank Group Companies</center>
			</header>
			<p>
				iBank offers a wide range of banking products and financial services to corporate and retail customers through a variety of delivery channels and through its group companies.
			</p>

			<header class="about">
				<center>Board of Directors</center>
			</header>
			<p>
				iBank's Board members include eminent individuals with a wealth of experience in international business, management consulting, banking and financial services.
			</p>

			<header class="about">
				<center>Investors Relation</center>
			</header>
			<p>
				All the latest, in-depth information about  iBank's financial performance and business initiatives.
			</p>

			<header class="about">
				<center>Career Opportunities</center>
			</header>
			<p>
				Explore diverse openings with India's second-largest bank.
			</p>

			<header class="about">
				<center>Awards</center>
			</header>
			<p>
				Time and again our innovative banking services has been recognized and rewarded world over.
			</p>

			<header class="about">
				<center>News Room</center>
			</header>
			<p>
				Catch up with iBank's latest business and social initiatives, as well as innovative product launches.
			</p>

			<header class="about">
				<center>Corporate Social Responsibility</center>
			</header>
			<p>
				iBank is deeply engaged in human and economic development at the national level.
			</p>

			<header class="about">
				<center>Notice Board</center>
			</header>
			<p>
				Catch up with iBank's latest communication related to Acknowledgements, information on regulatory notices, banking schemes and others.
			</p>


			
		</div>

		<div class="footer" style="bottom: -70.5em">	
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