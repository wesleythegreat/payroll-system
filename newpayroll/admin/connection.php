<?php
//mysqli_connect("127.0.0.1", "root", "a10thunderbolt") or die(mysql_error());
//mysql_select_db("newpayroll") or die(mysql_error());
    $host = "127.0.0.1"; // Host name
	$username = "root"; // Mysqli username
	$password = ""; // Mysql password
	$db_name = "newpayroll"; // Database name
	$tbl_name = "admin"; // Table name

	// Connect to server and select databse.
	$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect");
?>