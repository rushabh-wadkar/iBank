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
		
			if(!empty($_POST['acc_no'])&&!empty($_POST['amt'])&&!empty($_POST['pass_key']))
			{
				$acc_id = $_SESSION['acc_id'];
				$acc_no = mysql_real_escape_string(stripslashes($_POST['acc_no']));
				$password = md5(mysql_real_escape_string(stripslashes($_POST['pass_key'])));
				$amount = mysql_real_escape_string(stripslashes($_POST['amt']));

				if(is_numeric($acc_no))
				{
					if(is_numeric($amount))
					{
						$query = "SELECT * FROM $mysql_db.$mysql_tb WHERE `acc_no`='$acc_id'";
						$result = mysql_query($query);
						if(!$result)
							echo "<center> <p style='padding: 5px;background-color:red;'> Something Went Wrong. Please Try Again. </p>	</center>";
						else
						{
								$query_1 = "SELECT * FROM $mysql_db.$mysql_tb WHERE `acc_no`='$acc_no'";
								$result_1 = mysql_query($query_1);
								if(mysql_num_rows($result_1)!=1)
									echo "<center> <p style='padding: 5px;background-color:red;'> Account Not Found. Please Enter Correct Account Number.</p>	</center>";
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
												if($amount<=$bal)
												{
													$own_balance = $bal - $amount;	
													if($own_balance>='100')
													{
															$query_transfer = "UPDATE $mysql_db.$mysql_tb SET `balance`='$own_balance' WHERE `acc_no`='$acc_id'";
															$result_transfer = mysql_query($query_transfer);

															$query_2 = "SELECT * FROM $mysql_db.$mysql_tb WHERE `acc_no`='$acc_no'";
															$result_2 = mysql_query($query_2);
															$count_2 = mysql_num_rows($result_2);
															if($count_2==1)
															{
																while($row2 = mysql_fetch_assoc($result_2))
																{
																	$o_balance = $row2['balance'];
																}
																$other_balance = $amount+$o_balance;
																$query_transfer2 = "UPDATE $mysql_db.$mysql_tb SET `balance`='$other_balance' WHERE `acc_no`='$acc_no'";
																$result_transfer2 = mysql_query($query_transfer2);
																if(!$result_transfer2)
																	echo "<center> <p style='padding: 5px;background-color:red;'> Something went wrong.Please try again. </p>	</center>";
																else
																{
																	$token_save = $token;
																	/*Your Account*/
																	$transfer_text = "Transfered Rs.".$amount." from Account Number - ".$acc_id.". Transaction ID - ".$token_save;
																	$query_3 = "INSERT INTO $mysql_db.$mysql_transaction_transfer(`acc_no`,`tid`) VALUES('$acc_no','$transfer_text');";
																		
																	/*Other's Account*/
																	$transfer_text_2 = "Transfered Rs.".$amount." into Account Number - ".$acc_no.". Transaction ID - ".$token_save;
																	$query_4 = "INSERT INTO $mysql_db.$mysql_transaction_transfer(`acc_no`,`tid`) VALUES('$acc_id','$transfer_text_2');";

																	if(mysql_query($query_4)&&mysql_query($query_3))
																	{
																		echo "<center> <p style='padding: 5px;background-color:green; color: white;'> Transfered Amount to Account Number - ".$acc_no." Successfully.</p>	</center>";
																		echo "<center> <p style='padding: 5px;background-color:green; color: white;'> Transaction id - <strong><u>".$token_save."</u></strong></p>	</center>";
																	}
																	else
																	{
																		echo "<center> <p style='padding: 5px;background-color:red;'> Something went wrong.</p>	</center>";
																	}
																}
															}

															if(!$result_transfer)
																echo "<center> <p style='padding: 5px;background-color:red;'> Something went wrong.Please try again. </p>	</center>";
													}
													else
														echo "<center> <p style='padding: 5px;background-color:red;'> You do not have that much Balance to withdraw. Account should have minimum of Rs.100</p>	</center>";
												}
												else
												{
													echo "<center> <p style='padding: 5px;background-color:red;'> You do not have that much Balance to Transfer.</p>	</center>";
												}
											}
											else 
											{
												echo "<center> <p style='padding: 5px;background-color:red;'> Password Didnot match.</p>	</center>";
											}
										
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

		<div class="about_comp_desc" style="border-radius: 10px;left: 25%; top: 8em;height: 15em; width: 20em; padding-top: 40px; padding-left: 40px;font-size: 25px;">
			<center>Enter the Details.</center>
			<br>
			<form action="" method="POST">
				Account Number : <input type="text" name="acc_no" placeholder="Enter the Account Number" size="25" style="border-radius:5px;padding: 5px;font-size: 18px;"></input>
				<br><br>
				Enter Password &nbsp;&nbsp;: <input type="password" name="pass_key" placeholder="Enter your Password." size="25" style="border-radius:5px;padding: 5px;font-size: 18px;"> </input>
				<br><br>
				Transfer Amount : <input type="text" name="amt" placeholder="Enter Amount" size="25" style="border-radius:5px;padding: 5px;font-size: 18px;"></input>
				<br><br>
				<center><input type="submit" class="register_id" name="transfer" value="Transfer"></center>
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