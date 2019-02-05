<?php 
require_once('../includes/ad-header.php');
$action = $_REQUEST['action'];
$location_id = $_REQUEST['location_id'];
ini_set('display_errors', 0);

if(intval($location_id) && $action == 'del'){
$delquery = "DELETE FROM location WHERE location_id=".$location_id;
$delresult = mysql_query($delquery);
if($delresult){
echo "One Record deleted !";
}
}


if($action == 'save'){
echo "One Record Added !";
}

$query = "SELECT * FROM location";
$result = mysql_query($query);
echo "<table width=700>";
echo "<tr><th>Id</th><th>Location</th><th>Edit</th><th>Delete</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['location_id']."</td>";
echo "<td>".$row['location_name']."</td>";
echo "<td><a href='addlocation.php?location_id=$row[location_id]&action=edit'>Edit</a></td>";
echo "<td><a href='viewlocations.php?location_id=$row[location_id]&action=del'>Delete</a></td>";
?>
<?php echo "</tr>";
}
echo "</table>";





?>
<?php require_once('../includes/ad-footer.php'); ?>
