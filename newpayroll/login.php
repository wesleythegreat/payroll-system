<?php
include('admin/connection.php');
include('sanitise.php');

$username = sanitise($_POST['username']);
$password = sanitise($_POST['password']);
$host = "127.0.0.1"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "newpayroll"; // Database name
	$tbl_name = "admin"; // Table name

	// Connect to server and select databse.
	$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect");
$qry = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
$tbl = mysqli_fetch_array($qry);
echo $tbl['username'];
$count = mysqli_num_rows($qry);

if($count==1)
{
	
echo "invalid username or password";
}
else
{
	session_start();
	$_SESSION['username'] = $username;
	header('Location: admin/index.php');
}
?>
