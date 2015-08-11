<html>
<head>
	<title>Edit</title>
</head>
<body>
			
	<?php error_reporting(E_ALL ^ E_NOTICE); 
	error_reporting(E_ERROR); ?>
	
	<div class="topbar"><h1><center>Edit Information</center></h1></div>
	<div class="box">
		<?php
		$id = $_GET['txtid'];
		include "connect.php";
		$i = "select *from tbl_student where stuid=".$id;
		$h = mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
			?>

			<table>
				<form method="post" action="">
					<tr>
						<th>ID :</th>
						<td><input type="text" name="txtid" value="<?php echo $tr[0]; ?>"/></td>
					</tr>

					<tr>
						<th>Name :</th>
						<td><input type="text" name="txtname" value="<?php echo $tr[1];?>"/></td>
					</tr>
					<tr>
						<th>Gender :</th>
						<td><input type="text" name="txtgender" value="<?php echo $tr[2];?>"/></td>
					</tr>

					<tr>
						<th>Date of Birth:</th>
						<td><input type="text" name="txtdob" value="<?php echo $tr[3]; ?>" /></td>
					</tr>
					<tr>
						<th>Address:</th>
						<td><textarea cols="16" rows="3" name="txtaddress"> <?php echo $tr[4];?> </textarea></td>
					</tr>
					<tr>
						<th>Subject:</th>
						<td><input type="text" name="txtsubject" value="<?php echo $tr[5]; ?>" /></td>
					</tr>            
					<tr>
						<th>Edited Date:</th>
						<td><input type="text" name="txtdate" value="<?php echo $tr[6];?>"/></td>
					</tr>

					<?php	
						}
					?>

					<tr>
						<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            			<a href="index.php"><title="Go Back"/>Go Back</a>
            		</td>
					</tr>
				</form>
			</table>

	</div>
</center>
	<?php 
		include "connect.php";
		$i = mysql_query("update tbl_student set name='".$_POST['txtname']."',gender='".$_POST[txtgender]."',dob = '".$_POST[txtdob]."',address='".$_POST[txtaddress]."',sub='".$_POST[txtsubject]."',date='".$_POST[txtdate]."' where stuid =".$_POST[txtid]);

		if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        }
	?>


</body>
</html>