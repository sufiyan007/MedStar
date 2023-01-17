<?php
require_once "connectionserver.php";
        $p_id=$_REQUEST['p_id'];
        $name=$_REQUEST['name'];
        $dept_id=$_REQUEST['dept_id'];
        $s_id=$_REQUEST['s_id'];
        $ph_no=intval($_REQUEST['ph_no']);
        $age=intval($_REQUEST['age']);

$sql = "INSERT INTO patient(p_id,name,d_id,staff_id,phone_no,age) VALUES ('$p_id','$name','$dept_id','$s_id',$ph_no,$age)";
if(mysqli_query($con, $sql))
{

echo "successfull";

} 
else
{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($con);
}

?>