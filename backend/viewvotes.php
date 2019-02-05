<?php 
require_once('../includes/ad-header.php');
$action = $_REQUEST['action'];
$voter_id = $_REQUEST['voter_id'];

ini_set('display_errors', 0);

if(intval($voter_id) && $action == 'del'){
$delquery = "DELETE FROM votes WHERE voter_id=".$voter_id;
$delresult = mysql_query($delquery);
if($delresult){
echo "One Record deleted !";
}
}


if($action == 'save'){
echo "One Record Added !";
}

$query = "SELECT votes.voter_id,votes.voter_name,votes.voter_father_name,votes.voter_nic,location.location_name FROM votes, location WHERE votes.location_id=location.location_id";
$result = mysql_query($query);
echo "<table width=700>";
echo "<tr><th>Id</th><th>Voter Name</th><th>Voter Father Name</th><th>Voter NIC</th><th>Voter Location</th><th>Edit</th><th>Delete</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['voter_id']."</td>";
echo "<td>".$row['voter_name']."</td>";
echo "<td>".$row['voter_father_name']."</td>";
echo "<td>".$row['voter_nic']."</td>";
echo "<td>".$row['location_name']."</td>";
echo "<td><a href='addvote.php?voter_id=$row[voter_id]&action=edit'>Edit</a></td>";
echo "<td><a href='viewvotes.php?voter_id=$row[voter_id]&action=del'>Delete</a></td>";
?>
<?php echo "</tr>";
}
echo "</table>";





?>
<?php require_once('../includes/ad-footer.php'); ?>
