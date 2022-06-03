<?php
include "connect.php";
$query1=mysqli_query($con,"SELECT * FROM `student` WHERE `student_id`='$update'");
while ($row1=mysqli_fetch_array($query1))
 {
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="layout">
	<div id="banner">
		<?php
		include "tittle.php";
		?>
	</div>
	<div id="menu">
		<?php
		include "menu.php";
		?>
	</div>
	<div id="content">
		<center>
		<form action="updatestudent.php" method="POST">
			<table border="0">
			<tr><td>First Name:</td><td><input type="text" name="fnm" value="<?php echo $row1['first name'];?>"></td></tr>
			<tr><td>Last Name:</td><td><input type="text" name="lnm" value="<?php echo $row1['last name'];?>"></td></tr>
			<tr><td>Sex:<td><input type="radio" name="gender" value="Male">male
			<input type="radio" name="gender" value="Female">female</td></td></tr>
			<tr><td>Address:<td><input type="text" name="adds" value="<?php echo $row1['address'];?>"></td></td></tr>
			<tr><td>Date Of Birth:</td><td><input type="Date" name="dob" id="dob" value="<?php echo $row1['dob'];?>"></td></tr>
			<td></td><td><input type="submit" name="updatebtn" id="updatebtn" value="UPDATE"></td></tr>
			</table>
		</form>
	</center>
<?php
	}
?>
<?php
if (isset($_POST['updatebtn']))
 {
	$fname=$_POST["fnm"];
	$lname=$_POST["lnm"];
	$Sex=$_POST["gender"];
	$adds=$_POST["adds"];
	$dob=$_POST["dob"];
	include "connect.php";
	$quer=mysqli_query($con,"UPDATE `student` SET `first name`='$fname',`last name`='$lname',`gender`='$Sex',`address`='$adds',`dob`='$dob' where `student_id`='$update'");
	if ($quer==1)
	 {
		header("location:viewstudent.php");
	}
	else
	{
		echo "Record Not Updated";
		header("refresh:3;");
	}
}
?>
	</div>
	<div id="footer">
		<?php
		include "footer.php";
		?>
	</div>
</div>
</body>
</html>