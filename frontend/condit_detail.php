<?php  require_once('../includes/header.php');?>
<div class="view_form">
<?php 
$condit_id = $_REQUEST['condit_id'];
$query = "SELECT location.location_name,signs.image,condidates.condit_name,condidates.na_pa_id,condidates.condit_id,condidates.sign_id
FROM condidates,location,signs
WHERE
condidates.location_id=location.location_id
AND
condidates.sign_id=signs.sign_id
AND
condidates.condit_id=".$condit_id;
$result =mysql_query($query);
echo "<table class='view_table'>";
echo "<tr><th>Condidate Name</th><th>Location</th><th>Sign</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['condit_name']."</td>";
echo "<td>".$row['location_name']."</td>";
echo "<td><a href='fillvote.php?signid=$row[sign_id]&condit_id=$row[condit_id]&condit_name=$row[condit_name]&na_pk=$row[na_pa_id]'><img src='../images/$row[image]' width=40 height=40 /></a><td>";

echo "</tr>";
}
echo "</table>";
?>
</div>	
	


<?php  require_once('../includes/footer.php'); ?>

	

