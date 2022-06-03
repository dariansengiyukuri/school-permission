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
	<form action="" method="POST">
	<?php
    include "connect.php";
    $query=mysqli_query($con,"SELECT*FROM student order by student_id asc");
    echo "<table border='1'>";
    echo "<tr>"."<th>"."No"."</th>"."<th>"."First Name"."</th>"."<th>"."Last Name"."</th>"."<th>"."Gender"."</th>"."<th>"."Address"."</th>"."<th>"."Date Of Birth"."</th>"."<th>"."Action"."</th>"."</tr>";
    while ($row=mysqli_fetch_array($query)) 
    {
    ?>
    <tr>
    <td><?php echo $row['student_id'];?></td>
    <td><?php echo $row['first name'];?></td>
    <td><?php echo $row['last name'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['dob'];?></td>
    <td>
    <button><a href="updatestudent.php?updbtn=<?php echo $row['student_id'];?>">UPDATE</a></button>
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


