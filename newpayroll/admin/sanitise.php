<?php
include('admin/connection.php');
function sanitise($str) {
$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = null; // Mysql password
	$db_name = "newpayroll"; // Database name
	$tbl_name = "Register_staff"; // Table name

	// Connect to server and select databse.
	$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect");
		$str = @trim($str);
		$str = addslashes($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($conn,$str);
		}


?>