<html>
<head>


<style>
body{
 background: rgb(238,174,202);
background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}
#frm
{
 background: rgb(226,226,226);
background: linear-gradient(90deg, rgba(226,226,226,1) 42%, rgba(0,0,0,1) 100%);

}
</style>
<body>
<h1 style="color:#000f21;" align=center>Patient Records</h1>
<br><br><br><br><br>
<?php
require_once "connectionserver.php";
$query = "SELECT * FROM patient";
$result = mysqli_query($con, $query);
?><center>
<table bgcolor="" border ="10" cellspacing="10" cellpadding="20" class="dpt_table" >
  <tr>
<th>Patient ID</th>
<th>Name</th>
<th>Department ID</th>
<th>Staff ID</th>
<th>Phone No.</th>
<th>Age</th>
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $data['p_id']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['d_id']; ?> </td>
   <td><?php echo $data['staff_id']; ?> </td>
   <td><?php echo $data['phone_no']; ?> </td>
   <td><?php echo $data['age']; ?> </td>
 


<tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="9">No data found</td>
    </tr>
 <?php } ?>
 </table

?>
<button onclick="document.location='dashboard.html'">Dashboard</button><br>
<br><br>
</center>
</body>
</html>
