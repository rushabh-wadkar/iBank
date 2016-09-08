<?php 
	session_start();
	require '../php_script/connect.inc.php';
	if(!$_SESSION['acc_id'])
	{
		header("location: login.php");
	}
	else
	{
		
			if(!empty($_POST['newpassword1'])&&!empty($_POST['newpassword2']))
			{
				$newpassword1 = mysql_real_escape_string($_POST['newpassword1']);
				$newpassword2 = mysql_real_escape_string($_POST['newpassword2']);
				if($newpassword1!=$newpassword2)
					echo "<center> <p style='padding: 5px;background-color:red;'> Both the password didnot match! Please enter Again.</p>	</center>";
				else
				{
					$acc_id = $_SESSION['acc_id'];
					$newpassword = md5($newpassword1);
					$query = "UPDATE $mysql_db.$mysql_tb SET `password`='$newpassword' WHERE `acc_no`='$acc_id'";
					$result = mysql_query($query);
					if(!$result)
						echo "<center> <p style='padding: 5px;background-color:red;'> Something Went Wrong. Please try again.</p>	</center>";	
					else
					{
						session_destroy();
						echo "<center> <p style='padding: 5px;background-color:red;'> Password Changed Successfully. Please log in Again.</p>	</center>";
						header('Refresh: 2; url=../login.php');
					}
				}
			}
		
	}
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>iBank Inc:. Personal Banking</TITLE>
		<link rel="icon" type="image/png" href="../images/head-icon.png" />
		<link type="text/css" rel="stylesheet" href="../style.css" />
		<link type="text/css" rel="stylesheet" href="../style_about.css" />


		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript">
		  			$(document).ready(function () {
		    		$("#showdiv").click(function () {
		      			 $(".basic_info").toggle();         
		   		 });
		 	 });
		 </script>
	</HEAD>
	<BODY>
		<div class="header">
			<div class="headerlogo">
				<img src="../images/header-logo.png" alt="LOGO" style="height: 80px; width: 80px;" ></img>
			</div>
			<div class="headername">
				iBANK.
			</div>
			<div class="headerDesc">
				The Only Bank You Can Trust.
			</div>
			<a href="../acc_info.php" alt="Home Page">
				<div class="hometab">
					HOME
				</div>
			</a>
			<a href="../account/settings.php" alt="login">
				<div class="logintab" style="width: 6em; background-color: #007fff;">
					&nbsp;SETTINGS&nbsp;
				</div>
			</a>
			<a href="../logout.php" alt="Register">
					<div class="registertab" style="left: 55em;">
						LOGOUT
					</div>
			</a>

			<div class="about_tab" style="left: 61.4em;">
				<ul id="menu-nav">
					<li> &nbsp;CONNECT
							<ul>
								<a href="./transfer.php"><li style="margin-left: -9px;">TRANSFER</li></a>
								<a href="./withdraw.php"><li style="margin-left: -9px;">WITHDRAW</li></a>
								<a href="./ministatement.php"><li style="margin-left: -9px;">MINI-STATEMENT</li></a>
							</ul>
					</li>
				</ul>
			</div>

			
		</div>

		<div class="about_comp_desc" style="border-radius: 10px;left: 25%; top: 8em;height: 10em; width: 20em; padding-top: 40px; padding-left: 40px;font-size: 25px;">
			<ul>
					<li><a href="javascript: void(0)" id="showdiv" style="decoration: none; color: white;">Change Password</a>
						<div class="basic_info" style="margin: 15px;width: 50em;height: 45px; display: none; font-size: 15px;">
							<form action="" method="POST">
								Enter the New Password - <input type="password" class="register_input" name="newpassword1" placeholder="Enter the new Password" max-length="30" size="30" style="border-radius: 5px;height: 20px; font-size: 10px;" ></input>
								<input type="password" class="register_input" name="newpassword2" placeholder="Enter the Password Again." max-length="30" size="30" style="border-radius: 5px;height: 20px; font-size: 10px;" ></input>
								<input type="submit" class="register_id" name="confirm" value="Confirm"></input>
							</form>
						</div>
					</li>
				
				</ul>
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