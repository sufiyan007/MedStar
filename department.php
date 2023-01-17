<?php
	require_once "connectionserver.php";
        $dpt_id=strval($_REQUEST['dpt_id']);
        $dpt_name=strval($_REQUEST['dpt_name']);
	$dpt_location=strval($_REQUEST['dpt_location']);


		$sql = "INSERT INTO department (dpt_id,dpt_name,dpt_location) VALUES ('$dpt_id','$dpt_name','$dpt_location')";
	echo $sql;
		if(mysqli_query($con, $sql)){

		echo "<br>successfull";
		}
		 else
		 {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);

		}
?>
