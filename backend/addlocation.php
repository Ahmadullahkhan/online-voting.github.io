<?php
require_once('../includes/ad-header.php');

if(isset($_POST['save'])){
   $location_name = $_POST['location_name'];
   
   $query = "INSERT INTO location (location_name) VALUES(' $location_name')";
   $result = mysql_query($query);
   if($result){
?>
		<script type="text/javascript">
	window.location="viewlocations.php?action=save";
	</script>
	<?php
  }else{
  echo "try again!";
  }
}

?>
<form action="" method="post" name="location_form" enctype="multipart/form-data" onsubmit="return validLocation()">
<table width="500" border="1">
  <tr>
    <td>location Name:</td>
    <td><input name="location_name" id="location_name" type="text"  value=""/></td>
  </tr>

  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="Add New location !" /></td>
  </tr>
</table>

</form>

<?php require_once('../includes/ad-footer.php'); ?>