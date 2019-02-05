<?php
 session_start(); 
ini_set('display_errors', 0);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<?php 
if(empty($_SESSION['admin_login'])){ /// $_SESSION['admin_login'] == ""
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php }else{
echo $_SESSION['admin_login'];
?>
<a href="logout.php">Log Out</a><br>
<a href="admin.php">BACK</a>
<?php } ?>

<?php
$connection = mysql_connect("localhost","root","");
if($connection){
$select_db = mysql_select_db("project",$connection);
if(!$select_db){
die("Try Again Database Not Found.".mysql_error());
}
}else{
die("Try Again Connection Not Found.".mysql_error());
}

$action = $_REQUEST['action'];
$sign_id = $_REQUEST['sign_id'];
if(intval($sign_id) && $action == 'edit'){
$editquery = "SELECT * FROM signs WHERE sign_id=".$sign_id;
$editresult = mysql_query($editquery);
$editrow = mysql_fetch_assoc($editresult);
}



if(isset($_POST['save']) && $action ==""){
 $upload_sign_image_name = $_FILES['sign_image']['name'];
 $upload_sign_image_tmp_name = $_FILES['sign_image']['tmp_name'];
 $location = "../images/";
 
 $query = "INSERT INTO signs(image) VALUES('$upload_sign_image_name')";
 $result = mysql_query($query);
 if($result){
 move_uploaded_file($upload_sign_image_tmp_name,$location.$upload_sign_image_name);
 ?>
<script type="text/javascript">
window.location="viewsigns.php?action=save";
</script>
<?php
 }else{
 echo "try again!";
 }
}




if(isset($_POST['save']) && $action =="edit")
{
 $upload_sign_image_name = $_FILES['sign_image']['name'];
 $upload_sign_image_tmp_name = $_FILES['sign_image']['tmp_name'];
 $location = "../images/";
 
 $query = "INSERT INTO signs(image) VALUE('$upload_sign_image_name')";
  $result = mysql_query($query);
  if($result){
 move_uploaded_file($upload_sign_image_tmp_name,$location.$upload_sign_image_name);
  ?>
<script type="text/javascript">
window.location="viewsigns.php?action=save";
</script>
<?php
 }else{
 echo "try again!";
 }
 }

?>
<form action="" method="post" name="sign_form" enctype="multipart/form-data" onsubmit="return valid_sign()">
<table width="500" border="1">
  <tr>
    <td>Sign Image</td>
    <td><input name="sign_image" id="sign_image"  type="file"  value="<?php echo $editrow['image']; ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save" value="Add New Sign Image" /></td>
  </tr>
</table>

</form>
</body>
</html>
