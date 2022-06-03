
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
		<h1><u><i><b><center>List Of Students Given Permission</center></b></i></u></h1>
		
       <form action="approve.php" method="POST">
       	<center>
       	<table border="0">
       	<tr><td>student names:</td>
       		<td><input type="text" name="nm"></td></tr>
    <tr><td>student birth date:</td>
    	<td><input type="date" name="sbd"></td></tr>
    	<tr><td>Sex:<td><input type="radio" name="gender">male
					<input type="radio" name="gender">female</td></td></tr>
					<tr><td></td><td><select name="title">
						<option value="">select title of admin</option>
					
					<option>prefect of displine</option>
					<option>prefect of studies</option>
					<option>secretary</option>
					<option>accountant</option>
					<option>head master</option>
					</select></td></tr>
					<tr><td>phone of admin:</td>
	<td><input type="number" name=""></td></tr>
	<tr><td>reason:</td>
	<td><input type="text"></td></tr>
	<tr><td>destination:</td>
	<td><input type="text" name=""></td></tr>
    <tr><td>phone of destination</td>
	<td><input type="number" name=""></td></tr>
	<tr><td>time_out:</td>
	<td><input type="time" name=""></td></tr>
    <tr><td>time_in</td>
	<td><input type="time" name=""></td></tr>
	<tr><td></td><td><input type="submit" value="approved"></td></tr>
    </table>
	</div>
	<div id="footer">
		<?php
		include "footer.php";
		?>
	</div>
</div>
</body>
</html>