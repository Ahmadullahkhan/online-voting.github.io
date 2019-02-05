<?php  require_once('../includes/header.php');?>
<div class="view_form">
<?php 
$sign_id = $_REQUEST['signid'];
$condit_id = $_REQUEST['condit_id'];
$condit_name = $_REQUEST['condit_name'];
$nic = $_REQUEST['nic'];
$na_pa = $_REQUEST['na_pk'];
if($na_pa =='NA' || $na_pa =='na'){
echo $query = "INSERT INTO fill_votes_to_na (condit_name,sign_id,condit_id,nic,vote_for_na) VALUES ('$condit_name','$sign_id','$condit_id','$nic','$na_pa')";
}else{
echo $query = "INSERT INTO fill_votes_to_pa (condit_name,sign_id,condit_id,nic,vote_for_pa) VALUES ('$condit_name','$sign_id','$condit_id','$nic','$na_pa')";
}
$result = mysql_query($query);
 if($result){
 echo "You fill your votes !";
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

	

