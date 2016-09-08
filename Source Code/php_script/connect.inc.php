<?php
	error_reporting();
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_password = '';
	$mysql_db = 'ibank';
	$mysql_tb = 'customers';
	$mysql_transaction_transfer = 'transaction_transfer';
	$mysql_transaction_withdraw = 'transaction_withdraw';

	mysql_connect($mysql_host, $mysql_user, $mysql_password) or die('Couldn\'t connect to Server');
	mysql_select_db($mysql_db) or die('Couldn\'t connect to the Database');
?>