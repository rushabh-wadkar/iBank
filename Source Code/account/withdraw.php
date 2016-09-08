<?php 
	session_start();
	require '../php_script/connect.inc.php';
	require 'encrypt.php';
	if(!$_SESSION['acc_id'])
	{
		header("location: login.php");
	}
	else
	{
			if(!empty($_POST['amt'])||!empty($_POST['pass_key']))
			{
				$acc_no = mysql_real_escape_string(stripslashes($_SESSION['acc_id']));
				$password = md5(mysql_real_escape_string(stripslashes($_POST['pass_key'])));
				$amount = mysql_real_escape_string(stripslashes($_POST['amt']));

				if(is_numeric($acc_no))
				{
					if(is_numeric($amount))
					{
						$query = "SELECT * FROM $mysql_db.$mysql_tb WHERE `acc_no`='$acc_no'";
						$result = mysql_query($query);
						if(!$result)
							echo "<center> <p style='padding: 5px;background-color:red;'> Something Went Wrong. Please Try Again. </p>	</center>";
						else
						{
							$count = mysql_num_rows($result);
							if($count==1)
							{
								while($row = mysql_fetch_assoc($result))
								{
									$pass = $row['password'];
									$bal = $row['balance'];
								}
									if($password==$pass)
									{
										if($bal>='100')
										{
											if($amount<=$bal)
											{
												$own_balance = $bal - $amount;	
												if($own_balance>='100')
												{
														$query_withdraw = "UPDATE $mysql_db.$mysql_tb SET `balance`='$own_balance' WHERE `acc_no`='$acc_no'";
														$result_withdraw = mysql_query($query_withdraw);

														if(!$result_withdraw)
															echo "<center> <p style='padding: 5px;background-color:red;'> Something went wrong.Please try again. </p>	</center>";
														else
														{
														//	echo "<center> <p style='padding: 5px;background-color:red;'> Successfully Withdrawed from Account.</p>	</center>";
																	$token_save = $token;
																	$transfer_text = "Withdrawed Rs.".$amount.". Transaction ID - ".$token_save;
																	$query_5 = "INSERT INTO $mysql_db.$mysql_transaction_withdraw(`acc_no`,`wid`) VALUES('$acc_no','$transfer_text');";
																		
																	if(mysql_query($query_5))
																	{
																		echo "<center> <p style='padding: 5px;background-color:green;'> Successfully Withdrawed Amount of Rs.".$amount.". Balance - Rs.".$own_balance.".</p>	</center>";
																		echo "<center> <p style='padding: 5px;background-color:green;'> Transaction id - <strong><u>".$token_save."</u></strong></p>	</center>";
																		
																	}
																	else
																	{
																		echo "<center> <p style='padding: 5px;background-color:red;'> Something went wrong.</p>	</center>";
																	}
														}
													

														if(!$result_withdraw)
															echo "<center> <p style='padding: 5px;background-color:red;'> Something went wrong.Please try again. </p>	</center>";
												}
												else
												{
													echo "<center> <p style='padding: 5px;background-color:red;'> You do not have that much Balance to withdraw. Account should have minimum of Rs.100</p>	</center>";
												}
											}
											else
											{
												echo "<center> <p style='padding: 5px;background-color:red;'> Amount is Greater than your Account Balance.</p>	</center>";
											}
										}
										else
										{
											echo "<center> <p style='padding: 5px;background-color:red;'> You do not have that much Balance to withdraw. Account should have minimum of Rs.100</p>	</center>";
										}
									}
									else 
									{
										echo "<center> <p style='padding: 5px;background-color:red;'> Password Didnot match.</p>	</center>";
									}
								
							}
						}

					}
					else
					{
						echo "<center> <p style='padding: 5px;background-color:red;'> Amount Must Be Numeric. Please Try Again.</p>	</center>";
					}
				}
				else
				{
					echo "<center> <p style='padding: 5px;background-color:red;'> Account Number Must Be Numeric. Please Try Again. </p>	</center>";
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
				<div class="logintab" style="width: 6em;">
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

		<div class="about_comp_desc" style="border-radius: 10px;left: 25%; top: 8em;height: 15em; width: 20em; padding-top: 40px;font-size: 25px;">
			<center>Enter the Details.</center>
			<br>
			<form action="" method="POST">
				Account Number &nbsp;&nbsp;: <input type="text" name="acc_no" disabled placeholder="<?php echo $_SESSION['acc_id'] ?>" size="20" style="border-radius:5px;padding: 5px;font-size: 18px;"></input>
				<br><br>
				Enter Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="pass_key" placeholder="Enter your Password." size="20" style="border-radius:5px;padding: 5px;font-size: 18px;"> </input>
				<br><br>
				Withdraw Amount : <input type="text" name="amt" placeholder="Enter Amount" size="20" style="border-radius:5px;padding: 5px;font-size: 18px;"></input>
				<br><br>
				<center><input type="submit" class="register_id" name="transfer" value="Withdraw"></center>
			</form>
		</div>

		<div class="footer" style="bottom: -5em">	
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