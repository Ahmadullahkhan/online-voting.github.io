<?php  require_once('../includes/header.php');?>
<div class="view_form">
<?php 

if(isset($_POST['search'])){
$nic = $_POST['nic'];
$query = "SELECT location.location_name,votes.voter_name,votes.voter_father_name,votes.voter_nic,votes.location_id
FROM location,votes 
WHERE 
votes.location_id =location.location_id
AND
votes.voter_nic='$nic'";
$result =mysql_query($query);
$num_row = mysql_num_rows($result);
if($num_row > 0){
echo "<table class='view_table'>";
echo "<tr><th>Voter Name</th><th>Voter Father Name</th><th>Location</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['voter_name']."</td>";
echo "<td>".$row['voter_father_name']."</td>";
echo "<td>".$row['location_name']."</td>";
echo "</tr>";
}
echo "</table>";
}else{
echo "<h4>your NIC Not Found in our Database!</h4>";
}
}
?>
</div>	
	


<?php  require_once('../includes/footer.php'); ?>

	

