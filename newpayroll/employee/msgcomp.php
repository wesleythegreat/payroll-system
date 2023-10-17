<?php
if(isset($_POST['submit'])){
include('../sanitise.php');
mysqli_connect("148.66.136.215", "yuri", "a10thunderbolt","newpayroll") or die(mysqli_error());
//mysqli_select_db("newsalary") or die(mysqli_error());
////sender
$sender = sanitise($_POST['sender']);

////receipient id
$receipientid = sanitise($_POST['rid']);
//
////receipient name
$receipientname = sanitise($_POST['receipient']);
//
////subject
$subject = sanitise($_POST['subject']);
//
////message
$message = sanitise($_POST['message']);

$insert = "INSERT INTO staff_inbox (staff_id, sender, receiver, msg_subject, msg_msg) VALUES ('$receipientid', '$sender', '$receipientname', '$subject', '$message')";
$insert2 = mysqli_query($conn,$insert) or die(mysqli_error());
		
$insert4 = "INSERT INTO staff_outbox (staff_id, sender, receiver, msg_subject, msg_msg) VALUES ('$receipientid', '$sender', '$receipientname', '$subject', '$message')";
$insert3 = mysqli_query($conn,$insert4) or die(mysqli_error());

if (($insert2) && ($insert3))
				{
					echo "message sent";
					echo "<a href='../employee/outbox.php'>Back to Outbox</a>";
				}
			else
				{
					echo "message not sent";
				}
}
?>