<?php
	ob_start();
	require 'connect.inc.php';

	if(isset($_POST['register']))
	{
		if(!empty($_POST['first_name'])&&!empty($_POST['last_name'])&&!empty($_POST['email_id'])&&!empty($_POST['password1'])&&!empty($_POST['password2'])&&!empty($_POST['mobile_no']))
		{
			if(isset($_POST['first_name'])&&isset($_POST['last_name'])&&isset($_POST['email_id'])&&isset($_POST['password1'])&&isset($_POST['password2'])&&isset($_POST['mobile_no']))
			{

				if($_POST['password1']===$_POST['password2'])
				{
					if(strlen($_POST['password1'])>=8&&is_numeric($_POST['mobile_no'])&&strlen($_POST['mobile_no'])==10)
					{
						$first_name = $_POST['first_name'];
						$last_name = $_POST['last_name'];
						$email_id = mysql_real_escape_string(stripslashes($_POST['email_id']));
						$password = md5(mysql_real_escape_string(stripslashes($_POST['password1'])));
						$mobile_no = $_POST['mobile_no'];

						$query = "INSERT INTO $mysql_db.$mysql_tb(`first_name`,`last_name`,`email_id`,`password`,`balance`,`mobile_no`) VALUES('$first_name','$last_name','$email_id','$password','1000','$mobile_no');";

						$result = mysql_query($query);
						if($result)
						{
							$query1 = "SELECT `acc_no` FROM $mysql_db.`customers` WHERE `email_id`='$email_id'";
							$result1 = mysql_query($query1);

							while($rows_select = mysql_fetch_assoc($result1))
								$acc_no = $rows_select['acc_no'];

							echo "<center> <p style='padding: 5px;background-color: #12c20a;'>Congratulations, You are now the customer of iBank.co.Ltd. Please wait while we redirect you to the login page.</p>	</center>";
							echo "<center><h3> <p style='padding: 5px;background-color: #12c20a;'>Your Account Number is : ".$acc_no."</p>	</h3></center>";
							header('Refresh:4; url=login.php');
						}
						else
						{
							echo "<center> <p style='padding: 5px;background-color:red;'>Something went in inserting values in database.<br>Please try again</p>	</center>";
						}
					}
					else
					{
						if(strlen($_POST['password1'])<8)
							echo "<center> <p style='padding: 5px;background-color:red;'>Password too short. (Min 8 characters length)</p>	</center>";
						else if(!is_numeric($_POST['mobile_no'])||strlen($_POST['mobile_no'])!=10)
							echo "<center> <p style='padding: 5px;background-color:red;'>Enter a valid Mobile Number.</p>	</center>";
						else
							echo "<center> <p style='padding: 5px;background-color:red;'>Something went wrong. Please try again.</p>	</center>";
					}
				}
				else
				{
					echo "<center> <p style='padding: 5px;background-color:red;'>Password didn't match. Please try again.</p>	</center>";
				}
			}
		}
	}
	ob_flush();
?>