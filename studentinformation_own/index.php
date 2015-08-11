<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<center><h1>Welcome to Student</h1></center>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="Add_Form.php">Add New Student</a>
		<div>
			<form method="post" action="searchidandname.php">
			<select name="cbosearch">
					<option>ID</option>
					<option>Name</option>
					<option>Gender</option>
					<option>Address</option>
			</select>
			<input type="text" name="txtsearch" placeholder="Type to search"><input type="submit" name="cmdsearch" value="search"> 
			</form>
		</div>
		<table>
			<tr>
				<th>StuID</th>
				<th>StuName</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Address</th>
				<th>Subject</th>
				<th>Register Date</th>
				<th>Option</th>
			</tr>

			<?php 
				include "connect.php";
				$i = "select *from tbl_student";
				$h = mysql_query($i);	
				while ($tr= mysql_fetch_array($h)) 
				{
			?>
				<tr>
					<td><?php echo $tr[0]; ?></td>
					<td><?php echo $tr[1]; ?></td>
					<td><?php echo $tr[2]; ?></td>
					<td><?php echo $tr[3]; ?></td>
					<td><?php echo $tr[4]; ?></td>
					<td><?php echo $tr[5]; ?></td>
					<td><?php echo $tr[6]; ?></td>
					<td align="center"><a href="Delete.php? txtid=<?php echo $tr[0];?>">Delete</a>/<a href="Edit_Form.php? txtid=<?php echo $tr[0];?>">Edit</a></td>
				</tr>

				<?php
					}
				?>
		</table>


</body>
</html>