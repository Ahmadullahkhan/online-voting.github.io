<?php 

require_once('../includes/ad-header.php');
$action = $_REQUEST['action'];
$na_pa_id = $_REQUEST['na_pa_id'];
ini_set('display_errors', 0);

if(intval($na_pa_id) && $action == 'del'){
$delquery = "DELETE FROM na_pa WHERE na_pa_id=".$na_pa_id;
$delresult = mysql_query($delquery);
if($delresult){
echo "One Record deleted !";
}
}


if($action == 'save'){
echo "One Record Added !";
}

$query = "SELECT * FROM na_pa";
$result = mysql_query($query);
echo "<table width=700>";
echo "<tr><th>Id</th><th>NA/PA</th><th>Edit</th><th>Delete</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['na_pa_id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td><a href='addna_pa.php?na_pa_id=$row[na_pa_id]&action=edit'>Edit</a></td>";
echo "<td><a href='viewna_pas.php?na_pa_id=$row[na_pa_id]&action=del'>Delete</a></td>";
?>
<?php echo "</tr>";
}
echo "</table>";





?>
<?php require_once('../includes/ad-footer.php'); ?>
