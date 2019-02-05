<?php  require_once('../includes/header.php');?>
<div class="view_form">


<?php 
$signquery = "SELECT * FROM  signs";
$res = mysql_query($signquery);
$id = $_GET['id'];
?>
<table>
<tr><th>Condidate Name:</th><th>Condidate Sign:</th><th>Total Votes:</th><th>NA/PA:</th></tr>
<?php 
$sql ="select con.*,sig.*,np.* from condidates as con,signs as sig,na_pa as np
where con.sign_id = sig.sign_id and
con.na_pa_id = np.na_pa_id  and
np.name LIKE'%$id%'";
$result_set = mysql_query($sql);
while($row_set = mysql_fetch_assoc($result_set)){
  $query = "SELECT count(*) FROM fillvotes WHERE sign_id=".$row_set['sign_id'];
 $result = mysql_query($query);
 $row = mysql_fetch_array($result);
  echo "<tr>";
echo "<td width='20%' align='center'>".$row_set['condit_name']."</td>";

echo "<td width='20%' align='center'><img src='../images/$row_set[image]' width=20 height=20 /></td>";
echo "<td width='20%' align='center'>".$row['0']."</td>";
echo "<td width='20%' align='center'>".$row_set['name']."</td>";

echo "</tr>";
}


// while($sign = mysql_fetch_assoc($res)){
// $sign_id = $sign['sign_id'];
//  $result1=mysql_query("SELECT  condit_name as  name  FROM  condidates where sign_id='$sign_id'");
// $row2 = mysql_fetch_array($result1);
//  $result2=mysql_query("SELECT  name as  name  FROM  na_pa where na_pa_id='$sign_id' AND name LIKE'%PA%'");
//  $row3 = mysql_fetch_array($result2);

// $query = "SELECT count(*) FROM fillvotes WHERE sign_id=".$sign_id;
// $result = mysql_query($query);
// $row = mysql_fetch_array($result);
// echo "<tr>";
// echo "<td width='20%' align='center'>".$row2['name']."</td>";

// echo "<td width='20%' align='center'><img src='../images/$sign[image]' width=20 height=20 /></td>";
// echo "<td width='20%' align='center'>".$row['0']."</td>";
// echo "<td width='20%' align='center'>".$row3['name']."</td>";

// echo "</tr>";
// }
?>
</table>
</div>	
	


<?php  require_once('../includes/footer.php'); ?>

	

