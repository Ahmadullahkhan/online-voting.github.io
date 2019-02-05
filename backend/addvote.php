<?php 
ini_set('display_errors', 0);
require_once('../includes/ad-header.php');

$voter_id = $_REQUEST['voter_id'];
$action = $_REQUEST['action'];
if($action == 'error'){
echo "NIC number Already Exists";
}

if(intval($voter_id) && $action == 'edit'){
$editquery = "SELECT * FROM votes WHERE voter_id=".$voter_id;
$editresult = mysql_query($editquery);
$editrow = mysql_fetch_assoc($editresult);
}

if(isset($_POST['save']) && $action ==""){
   $voter_name = $_POST['voter_name'];
   $voter_father_name = $_POST['voter_father_name'];
   $voter_nic = $_POST['voter_nic'];
   $location_id = $_POST['location_id'];
   $email     = $_POST['email'];
  echo  $check_nic = "SELECT * FROM votes WHERE voter_nic='$voter_nic'";
   $check_query = mysql_query($check_nic);
 echo   $nic_num_row = mysql_num_rows($check_query);
   if($nic_num_row >1){
   ?>
	<script type="text/javascript">
	window.location="addvote.php?action=error";
	</script>
	<?php
	exit;
   }else{
   $query = "INSERT INTO votes (voter_name,voter_father_name,email,voter_nic,location_id) VALUES('$voter_name','$voter_father_name','$email','$voter_nic','$location_id')";
   
   $result = mysql_query($query);
  
   if($result){
   $to = $_POST['email'];
$subject = "Inform About Votte";
$txt = $voter_nic;
$headers = "From: hafeeztawhedi@gmail.com" . "\r\n";
mail($to,$subject,$txt,$headers)

    ?>
	<script type="text/javascript">
	window.location="viewvotes.php?action=save";
	</script>
	<?php
  }else{
  echo "try again!";
  }
  
  }
}



if(isset($_POST['save']) && $action =="edit"){
   $voter_name = $_POST['voter_name'];
   $voter_father_name = $_POST['voter_father_name'];
   $voter_nic = $_POST['voter_nic'];
   $location_id = $_POST['location_id'];
   $email     = $_POST['email'];
   $uquery = "UPDATE votes SET voter_name='$voter_name',voter_father_name='$voter_father_name',email='$email',voter_nic='$voter_nic',location_id='$location_id' WHERE voter_id=".$voter_id;
   $uresult = mysql_query($uquery);
   if($uresult){
    ?>
	<script type="text/javascript">
	window.location="viewvotes.php?action=save";
	</script>
	<?php
  }else{
  echo "try again!";
  }
}


?>

<form action="" method="post" name="form" enctype="multipart/form-data" onsubmit="return validVote()">
<table width="500" border="1">
  <tr>
    <td>Voter Name:</td>
    <td><input name="voter_name" id="voter_name" type="text"  value="<?php echo $editrow['voter_name']; ?>" required=required/></td>
  </tr>
 <tr>
    <td>Voter Father Name:</td>
    <td><input name="voter_father_name" id="voter_father_name" type="text"  value="<?php echo $editrow['voter_father_name']; ?>"/></td>
  </tr>
  <tr>
    <td>Voter Email:</td>
    <td><input name="email" id="email" type="text"  value="<?php echo $editrow['email']; ?>"/></td>
  </tr>
 
   <tr>
    <td>Voter Code:</td>
    <td><input name="voter_nic" id="voter_nic" type="text"  value="<?php echo $editrow['voter_nic']; ?>"/></td>
  </tr>
  
  <tr>
    <td>Location:</td>
    <td>
	<?php 
	$lquery = "SELECT * FROM location";
	$lresult = mysql_query($lquery);
	?>
	<select name="location_id" id="location_id">
	<option value="">Select Location</option>
	<?php
	while($lrow = mysql_fetch_assoc($lresult)){ ?>
	<option value="<?php echo $lrow['location_id']; ?>"><?php echo $lrow['location_name']; ?></option>
   <?php }
	?>
	</select>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="Add New Votes !" /></td>
  </tr>
</table>

</form>

<?php require_once('../includes/ad-footer.php'); ?>