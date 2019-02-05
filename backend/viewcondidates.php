<?php 
require_once('../includes/ad-header.php');
$action = $_REQUEST['action'];
$condit_id = $_REQUEST['condit_id'];
ini_set('display_errors', 0);

if(intval($condit_id) && $action == 'del'){
$delquery = "DELETE FROM condidates WHERE condit_id=".$condit_id;
$delresult = mysql_query($delquery);
if($delresult){
echo "One Record deleted !";
}
}
						//na_pa.name,

if($action == 'save'){
echo "One Record Added !";
}

$query = "SELECT c.*, l.*, s.*, p.*
				FROM
					condidates as c,
					location as l,
					signs  as s,
					na_pa as p
				WHERE
				l.location_id = c.location_id
				AND
				c.sign_id = s.sign_id
				AND
				c.na_pa_id = p.na_pa_id";
$result = mysql_query($query);
echo "<table width=700>";
echo "<tr><th>Id</th><th>Condidate Name</th><th>Location</th><th>Sign</th><th>NA/PA</th><th>Edit</th><th>Delete</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['condit_id']."</td>";
echo "<td>".$row['condit_name']."</td>";
echo "<td>".$row['location_name']."</td>";
echo "<td><img src='../images/$row[image]' width=40 height=40 /><td>";
echo "<td>".$row['name']."</td>";
echo "<td><a href='addcondidate.php?condit_id=$row[condit_id]&action=edit'>Edit</a></td>";
echo "<td><a href='viewcondidates.php?condit_id=$row[condit_id]&action=del'>Delete</a></td>";
?>
<?php echo "</tr>";
}
echo "</table>";





?>
<?php require_once('../includes/ad-footer.php'); ?>
