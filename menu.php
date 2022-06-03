
<style type="text/css">
	
	#menu{
	width: auto;
	height: 50px;
	background-color:gray;
}
	

}
#footer{
	width: auto;
	height: 50px;
	background-color:gray;

}
.dropdown
{
	display: inline-block;
	position: relative;
	padding-top: 27px;
}
.dropbtn
{
	

}
.dropdown-content
{
	display: none;
	position: absolute;
	
}
.dropdown:hover .dropdown-content
{
	display: block;
}
.dropdown:hover .dropbtn
{
	background-color: white;

}
.dropdown-content a
{
	display: block;
	text-decoration: none;
	width: 120px;
	padding: 12px 16px;
}
.dropdown-content a :hover 
{
	background-color: purple;
}

</style>



<div class="dropdown">
	<button class="dropbtn">Home</button>
</div>






<div class="dropdown">
			<button class="dropbtn">student</button>
			<div class="dropdown-content">
				<a href="newstudent.php">new student</a>
				<a href="viewstudent.php">view student</a>
				<a href="updatestudent.php">Update student</a>
				
			</div>
		</div>

<div class="dropdown">
			<button class="dropbtn">adiministration</button>
			<div class="dropdown-content">
				<a href="newadmin.php">new adimin</a>
				<a href="viewadmin.php">view admin</a>
				<a href="updateadimin.php">update adimin</a>
				<a href="deleteadimin.php">delete adimin</a>
			</div>
		</div>


<div class="dropdown">
			<button class="dropbtn">permission</button>
			<div class="dropdown-content">
				<a href="approve.php">approve</a>
				</div>
			</div>

	













