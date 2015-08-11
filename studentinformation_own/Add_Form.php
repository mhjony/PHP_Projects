<!DOCTYPE html>
<html>
<head>
	<title>
		Add Form
	</title>
</head>
<body bgcolor="#CCCCFF">
	<div id="topbar">
    	<center><h1 style="color:#939">Welcome to Add Form</h1>
    </div>

    <div id = "form">
    	<table>
    		<form method = "post" action = "">
    			<tr>
                    <?php
                    error_reporting(E_ERROR); 
                    ?>

    				<?php 
    					include ("connect.php");
    					$g = mysql_query("select max(stuid) from tbl_student");
    					while ($id = mysql_fetch_array($g))
    					 {
    				?>
					<th>ID :</th>
					<td><input type="text" name="txtid" value="<?php echo $id[0]+1; ?>" readonly = "readonly"></td>
					</tr>
					<?php
    					}
    				?>

    				<tr>
    					<th>Name :</th>
    					<td><input type="text" name="txtname" placeholder = "Type Name"></td>
    				</tr>

                    
    				<tr>
    					<th>Gender :</th>
    					<td><select name="txtgender">
    							<option>Select Gender</option>
    							<option>Male</option>
    							<option>Female</option>
    						</select>
    					</td>
    				</tr>

    				<tr>
    					<th>Date of Birth</th>
    					<td>
                            <select name="txtday">
    						  <option>Day</option>
    						      <?php 
    								$d = 0;
    								do{
    									$d++;
    									echo "<option>".$d."</option>";
    								}while ($d <= 30); 

    						      ?>    						
    					   </select>
                       

                       
                            <select name="txtmonth">
                                <option>month</option>
                                    <?php 
                                        $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
                                        for ($i=0; $i <count($month) ; $i++) { 
                                        # code...
                                        echo "<option>".$month[$i]."</option>";
                                        }
                                    ?>                                    
                            </select>
                        
                        
                            <select name="txtyear">
                                <option>Year</option>
                                <?php
                                    $y = 1985;
                                    while($y < 2015){
                                        $y++;
                                        echo "<option>".$y."</option>";
                                        
                                    }
                                    
                                ?>
                                
                            </select>
                        </td>    					
    				</tr>
                    <tr>
                        <th>Address :</th>
                        <td><textarea rows="4" cols="27" name="txtaddress" placeholder = "Type your address"></textarea></td>
                    </tr>

                    <tr>
                        <th>Subject :</th>
                        <td>
                        <select name="txtsubject">
                        <option>Select Subject</option>
                            <?php 
                                $sub = array("C","C++","Java","PHP","HTML","MySql",".Net","Python");
                                $sublength = count($sub);
                                for($x = 0; $x <$sublength; $x++){
                                    echo "<option>".$sub[$x]."</option>";
                                }
                            ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Register Date :</th>
                        <td><input type="text" name="txtdate" value="<?php echo date("d/m/y"); ?>" readonly = "readonly"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="cmdadd" value="Add">
                        <input type="reset" name="cmdreset" value="Clear"></td>
                    </tr>


    			

    		</form>
    	</table>
    </div>
    <?php 
        $id = $_POST['txtid'];
        $name = trim($_POST['txtname']);
        $gender = trim($_POST['txtgender']);
        $dob = trim($_POST['txtday']."/".$_POST['txtmonth']."/".$_POST['txtyear']);
        $address = trim($_POST['txtaddress']);
        $sub = trim($_POST['txtsubject']);
        $date = trim($_POST['txtdate']);

        if (isset($_POST['cmdadd'])) 
        {
                   # code...
            if (empty($name) || $gender == "Select Gender" || $_POST['txtday'] == "Day" || $_POST[txtmonth] == "Month" || 
            $_POST[txtyear] == "Year" || empty($address) || $sub == "Select Subject") 
            {
                       # code...
            echo "Please input the all field";
            }
            else
            {
                include "connect.php";
                $i = mysql_query("insert into tbl_student values('".$id."','".$name."','".$gender."','".$dob."','".$address."','".$sub."','".$date."')");
                if($i== true)
                {
                    echo '<META HTTP-EQUIV="Refresh" content="0; URL=index.php">';                        
                }
            }
        }   
    ?>


</body>
</html>
