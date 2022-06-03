<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="layout">
	<div id="banner">	
		</div>
	<div id="menu">

<?php

include 'menu.php';

?>

	</div>
	<div id="content

	
<form action="php.php" method="POST">
	<center>
<table>
	
	<tr><td>Phone of admin<input type="number"  name="phn" value="+250" required=""></td></tr>
			<tr><td>select title of admin<select name="title">
			<option></option>
					<option value="p">prefect of displine</option>
					<option value="s">prefect of studies</option>
					<option value="t">secretary</option>
					<option value="acc">accountant</option>
					<option value="hm">head master</option>
</select></td></tr>
<tr><td><button type="submit" name="submit">save the admin record</button></td></tr>
</table>
</center>
</form>
	</div>
	
	</div>

</body>
</html>