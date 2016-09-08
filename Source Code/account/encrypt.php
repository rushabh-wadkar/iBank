<?php
	$time = time();
	$dmy = date('Y.m.d', $time);
	$t = date('h.i.sa',$time);
	$token = md5(stripslashes(mysql_real_escape_string($dmy.$t.$time.rand().rand(1,1000))));
?>