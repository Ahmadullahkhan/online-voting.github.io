<?php 
require_once('../includes/ad-header.php');

if(isset($_POST['save'])){
   $condit_name = $_POST['condit_name'];
   $sign_id = $_POST['sign_id'];
   $location_id = $_POST['location_id'];
   $na_pa_id = $_POST['na_pa_id'];
   
   $query = "INSERT INTO condidates (condit_name,sign_id,location_id,na_pa_id) VALUES('$condit_name','$sign_id','$location_id','$na_pa_id')";
   $result = mysql_query($query);
   if($result){
    ?>
	<script type="text/javascript">
	window.location="viewcondidates.php?action=save";
	</script>
	<?php
  }else{
  echo "try again!";
  }
}

?>
<form action="" method="post" name="sign_form" enctype="multipart/form-data"  onsubmit="return condidate()">
<table width="500" border="1">
  <tr>
    <td>Condidate Name:</td>
    <td><input name="condit_name" id="condit_name" type="text"  value=""/></td>
  </tr>
  <tr>
    <td>Sign:</td>
    <td>
	<?php 
	$signquery = "SELECT * FROM signs";
	$signresult = mysql_query($signquery);
	?>
	<select name="sign_id" id="sign_id">
	<option value="">Select Sign</option>
	<?php
	while($signrow = mysql_fetch_assoc($signresult)){ ?>
	<option value="<?php echo $signrow['sign_id']; ?>"><?php echo $signrow['image']; ?></option>
   <?php }
	?>
	</select>
	</td>
  </tr>
  <tr>
    <td>Location:</td>
    <td>
	<?php 
	$lquery = "SELECT * FROM location";
	$lresult = mysql_query($lquery);
	?>
	<select name="location_id" id="locationid">
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
    <td>NA/PA:</td>
    <td>
	<?php 
	$npquery = "SELECT * FROM na_pa";
	$npresult = mysql_query($npquery);
	?>
	<select name="na_pa_id" id="na_pa_id">
	<option value="">Select Na-Pa</option>
	<?php
	while($nprow = mysql_fetch_assoc($npresult)){ ?>
	<option value="<?php echo $nprow['na_pa_id']; ?>"><?php echo $nprow['name']; ?></option>
   <?php }
	?>
	</select>

	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="Add New Condidate !" /></td>
  </tr>
</table>

</form>

<?php require_once('../includes/ad-footer.php'); ?>