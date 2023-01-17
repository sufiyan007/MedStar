<?php
require_once "connectionserver.php";
    $staff_id=$_REQUEST['staff_id'];
    $name=$_REQUEST['name'];
	$role=$_REQUEST['role'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$d_id=$_REQUEST['d_id'];
	echo $staff_id;
    
	$sql = "INSERT INTO Staff(staff_id,name,role,username,password,d_id) VALUES ('$staff_id','$name','$role','$username','$password','$d_id')";

		if(mysqli_query($con, $sql)){
			echo "successfull";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($con);

		}
