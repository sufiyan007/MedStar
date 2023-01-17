
<html>
<body>
  <style>
    body{
      background:linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
  </style>
<br><br><br>
<h1 align=center>DEPARTMENTS  AVAILABLE</h1>
<br><br>

<?php
require_once "connectionserver.php";
$query = "SELECT * FROM department";
$result = mysqli_query($con, $query);
?><center>
<table border ="2" cellspacing="7" cellpadding="30" class="dpt_table" >
  <tr>
    <th>Dept Id</th>
    <th>Dept Name</th>
    <th>Dept Location</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $data['dpt_id']; ?> </td>
   <td><?php echo $data['dpt_name']; ?> </td>
   <td><?php echo $data['dpt_location']; ?> </td>
 <tr>
 <?php
  $sn++;}} 
  else 
  { ?>
    <tr>
     <td colspan="10">No data found</td>
    </tr>
 <?php 
} 
?>
 </table
?>
</body>
<br><br>
<button onclick="document.location='dashboard.html'">Dashboard</button>

</center>
</html>
