<html>
	<head>
		<title>
			Delete
		</title>
	</head>
	<body>

		<?php error_reporting(E_ALL ^ E_NOTICE); 
		error_reporting(E_ERROR); ?>


		<?php 

			$id = $_GET['txtid'];
			include "connect.php";
			$i = "select *from tbl_student where stuid = ".$id;
			$h = mysql_query($i);
			if($tr = mysql_fetch_array($h))
			{
		?>
			<table>
				<form method="post" action="">
				<tr>
					<th>ID :</th>
					<td><input type="text" name="txtid" value="<?php echo $tr[0];?>"> </td>
				</tr>
				<tr>
					<th>Name :</th>
					<td><input type="text" name="txtname" value="<?php echo $tr[1];?>" readonly="readonly"> </td>
				</tr>
				<tr>
					<th>Gender :</th>
					<td><input type="text" name="txtgender" value="<?php echo $tr[2];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<th>Date of Birth :</th>
					<td><input type="text" name="txtdob" value="<?php echo $tr[3];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<th>Address :</th>
					<td><input type="text" name="txtaddress" value="<?php echo $tr[4];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<th>Subject :</th>
					<td><input type="text" name="txtsubject" value="<?php echo $tr[5];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<th>Date :</th>
					<td><input type="text" name="txtdate" value="<?php echo $tr[6];?>" readonly="readonly"></td>
				</tr>
				<?php
					}
				?>
				<tr>
				<td>
				<input type="submit" value="Delete" name="cmddelete">
				<a href="index.php">Go Back</a></td>
				</tr>

				
				</form>
			</table>

			<?php 
					$id = $_POST['txtid'];
					include "connect.php";
					$i = "delete from tbl_student where stuid=".$id;
					$h= mysql_query($i);
					if($h==true)
					{
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
					}
				?>
					

				
	</body>
</html>