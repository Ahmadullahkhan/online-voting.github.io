<?php  require_once('../includes/header.php');?>
<div class="view_form">
<?php 
$sign_id = $_REQUEST['signid'];
$condit_id = $_REQUEST['condit_id'];
$condit_name = $_REQUEST['condit_name'];
$nic = $_REQUEST['nic'];
$na_pk = $_REQUEST['na_pk'];
if(isset($_POST['fillvote'])){
if(!empty($sign_id) && !empty($condit_id) && !empty($nic)){
$chkqry = "SELECT * FROM votes WHERE voter_nic='$nic'";
$checkresult = mysql_query($chkqry);
$num_row = mysql_num_rows($checkresult);

$qry = "SELECT * FROM fillvotes WHERE na_pk='$na_pk' AND nic='$nic'";
$res = mysql_query($qry);
$numrow = mysql_num_rows($res);

if($num_row > 0){
if($numrow > 0){
echo "<strong aligen=center>SORRY! Alerady filled Vote </strong> "; 
}else{
$query = "INSERT INTO fillvotes (condit_name,sign_id,condit_id,nic,na_pk) VALUES ('$condit_name','$sign_id','$condit_id','$nic','$na_pk')";
}
$result = mysql_query($query);
 if($result){
 echo "<strong>SUCCESSFULLY FILLED THE Vote!</strong>";
  }
}else{
echo "<h2>Your NIC No is not found !</h2>";
}
}
}
?>
<form action="" method="post">
<table class='view_table'>
	<tr>
      <td>NIC:</td>
	  <td><input type="text" name="nic" id="nic" class="inputbox"/></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" value="Fill Vote" name="fillvote"  class="submit"/></td>
	</tr>
</table>
</form>
</div>	
	


<?php  require_once('../includes/footer.php'); ?>

	

