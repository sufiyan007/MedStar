<?php
require_once "connectionserver.php";
$p_id = $_REQUEST['p_id'];
$sql1 = "DELETE FROM patient WHERE p_id='$p_id'";
echo $sql1;
if(!mysqli_query($con,$sql1))
{
echo '<script type="text/javascript" language="javascript">
            if(confirm("User does not exists"))
            {
                self.location="deletepatient.html";
            }
            </script> ';
            exit();
}
else{
                echo '<script type="text/javascript" language="javascript">
                if(confirm("DELETED SUCCESSFULLY!"))
                {
                    self.location="deletepatient.html";
                }
                </script> ';
            }
        ?>

