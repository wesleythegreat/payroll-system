<?php
include('../admin/connection.php');
include('../sanitise.php');
$staff_id = sanitise($_POST['staff_id']);
$password = sanitise($_POST['password']);

$qry =mysqli_query($conn,"UPDATE register_staff SET password = '$password' WHERE staff_id = '$staff_id'");

if($qry)
	{
		echo "Password reset successful";
	}

else
	{
		echo "not successful .die or (mysql_error())";
	}
?>
