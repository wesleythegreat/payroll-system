<?php
include('../admin/connection.php');
session_start();
if (!isset($_SESSION['staff_id'])) 
{
die(header('Location: ../index.php'));
}


$staff_id = $_SESSION['staff_id'];
$qry = mysqli_query($conn,"SELECT * FROM register_staff WHERE staff_id = '$staff_id'");



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/staff.css" type="text/css" />
<script src="../../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="outerwrapper">
<div id="header"><img src="../images/staffhead.jpg" /></div>
<div id="links">
  <?php include('link.php'); ?>
</div>
<div id="body">
  <table width="1000" border="1">
    <tr>
      <td width="124">&nbsp;</td>
      <td width="860" rowspan="5" align="left" valign="top"><table width="100%" border="0">
        <tr>
          <td width="46%" rowspan="3" align="left" valign="top"><table width="395" border="1" align="center">
            <tr>
              <?php while ($row = mysqli_fetch_array($qry)) {?>
              <td width="126"><strong>Staff ID</strong></td>
              <td width="237">&nbsp;<?php echo $row['staff_id']; ?></td>
            </tr>
            <tr>
              <td><strong>Full Name</strong></td>
              <td>&nbsp;<?php echo $row['fname']; ?></td>
            </tr>
            <tr>
              <td><strong>Department</strong></td>
              <td>&nbsp;<?php echo $row['department']; ?></td>
            </tr>
            <tr>
              <td><strong>Position</strong></td>
              <td>&nbsp;<?php echo $row['position']; ?></td>
            </tr>
            <tr>
              <td><strong>Date Joined</strong></td>
              <td>&nbsp;<?php echo $row['date_registered']; ?></td>
            </tr>
            <?php } ?>
          </table></td>
          <td width="48%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="3%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td><img src="../images/UlIqmHJn-SK.gif" width="124" height="110" /></td>
      </tr>
    <tr>
      <td><a href="profile.php">View Complete Profile</a></td>
    </tr>
    <tr>
      <td><a href="resetpassword.php" class="bx2" rel="470-200">Change Password</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
  </table>
</div>
</div>

<script type="text/javascript" src="../css/mootools.js"></script> 
<script type="text/javascript" src="../css/bumpbox-2.0.1.js" ></script> 
<script type="text/javascript">
//names,inSpeed,outSpeed,boxColor,backColor,bgOpacity,bRadius,borderWeight,borderColor,boxShadowSize,boxShadowColor,iconSet,effectsIn,effectsOut
doBump('.bx2',850, 500, 'FFF', '6b7477', 0.7, 7, 2 ,'333', 15,'000', 2, Fx.Transitions.Back.easeOut, Fx.Transitions.linear);
</script>
</body>
</html>