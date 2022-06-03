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
			<h1><b><u>view of admin</h1></b></u>
	<form action="" method="POST">
	<?php
    include "connect.php";
    $query=mysqli_query($con,"SELECT*FROM adiministration order by adimin_id asc");
    echo "<table border='1'>";
    echo "<tr>"."<th>"."No"."</th>"."<th>"."tittle"."</th>"."<th>"."phone"."</th>"."<th>"."Action"."</th>"."</tr>";
    {
    	# code...
    }
   while ($row=mysqli_fetch_array($query)) 
    {
    ?>
    <tr>
    <td><?php echo $row['admin_id'];?></td>
    <td><?php echo $row['tittle'];?></td>
    <td><?php echo $row['phone'];?></td>
    
    <td>
    <button><a href="updateadimin.php?updbtn=<?php echo $row['adimin_id'];?>">UPDATE</a></button>
    </td>
    </tr>
    <?php
    }
    echo "</table>";
	?>
	</form>
</center>
	</div>
	<div id="footer">
		<?php
		include "footer.php";
		?>
	</div>
</div>
</body>
</html>