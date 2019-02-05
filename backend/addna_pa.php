<?php 
require_once('../includes/ad-header.php');

$na_pa_id = $_REQUEST['na_pa_id'];
$action = $_REQUEST['action'];

if(intval($na_pa_id) && $action == 'edit'){
$editquery = "SELECT * FROM na_pa WHERE na_pa_id=".$na_pa_id;
$editresult = mysql_query($editquery);
$editrow = mysql_fetch_assoc($editresult);
}



if(isset($_POST['save']) && $action =="edit"){
   $na_pa_name = $_POST['na_pa_name'];
   $query = "UPDATE na_pa  SET name='$na_pa_name' WHERE na_pa_id=".$na_pa_id;
   $result = mysql_query($query);
   if($result){
    ?>
	<script type="text/javascript">
	window.location="viewna_pas.php?action=save";
	</script>
	<?php
  }else{
  echo "try again!";
  }
}



if(isset($_POST['save']) && $action ==""){
   $na_pa_name = $_POST['na_pa_name'];
   $query = "INSERT INTO na_pa (name) VALUES('$na_pa_name')";
   $result = mysql_query($query);
   if($result){
    ?>
	<script type="text/javascript">
	window.location="viewna_pas.php?action=save";
	</script>
	<?php
  }else{
  echo "try again!";
  }
}

?>
<form action="" method="post" name="form" enctype="multipart/form-data" onsubmit="return valid_Na_pa()">
<table width="500" border="1">
  <tr>
    <td>NA/PA Name:</td>
    <td><input name="na_pa_name" id="na_pa_name" type="text"  value="<?php echo $editrow['name']; ?>"/></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="Add New NA/PA !" /></td>
  </tr>
</table>

</form>

<?php require_once('../includes/ad-footer.php'); ?>