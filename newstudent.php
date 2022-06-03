<?php 

$connect=mysqli_connect("localhost","root","","permission");

 ?>

<!DOCTYPE html>
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
		<h1><u><i><b><center>Records Of All New Students</b></i></u></h1></center>
		<center>
		<form action="newstudent.php" method="POST">
			<table border="0">
			<tr><td>First Name:</td><td><input type="text" name="fnm"></td></tr>
			<tr><td>Last Name:</td><td><input type="text" name="lnm"></td></tr>
			<tr><td>Sex:<td><input type="radio" name="gender" value="Male">male
			<input type="radio" name="gender" value="Female">female</td></td></tr>
			<tr><td>Address:<td><input type="text" name="adds"></td></td></tr>
			<tr><td>Date Of Birth:</td><td><input type="Date" name="dob" id="dob"/></td></tr>
			<td></td><td><input type="submit" name="savebtn" id="savebtn"></td></tr>
			</table>
		</form>
	</center>
<?php
if (isset($_POST["savebtn"])) {
	$fname=$_POST["fnm"];
	$lname=$_POST["lnm"];
	$Sex=$_POST["gender"];
	$adds=$_POST["adds"];
	$dob=$_POST["dob"];
	include "connect.php";
	$sql=mysqli_query($con, "INSERT INTO `student`(`first name`, `last name`, `gender`, `address`, `dob`) VALUES ('$fname','$lname','$Sex','$adds','$dob')");
   if ($sql) {
   	# code...
   	echo "done";
   	header("refresh:3;");
   }
   else{
   	echo "try again";
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




