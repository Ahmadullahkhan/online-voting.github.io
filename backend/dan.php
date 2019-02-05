 <?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<h1>Welcome to home page</h1>
<?php 
if(empty($_SESSION['ttt_login'])){ /// $_SESSION['admin_login'] == ""
?>
<script type="text/javascript">
window.location="lan.php";
</script>
<?php }else{
echo $_SESSION['ttt_login'];  
?>
<a href="logout.php">Log Out</a>
<?php } ?>

<?php 
$connection = mysql_connect("localhost","root","");
if($connection){
$select_db = mysql_select_db("system",$connection);
if(!$select_db){
die("Try Again Database Not Found.".mysql_error()); 
}
}else{
die("Try Again Connection Not Found.".mysql_error());
}

 
$save = $_POST['save'];
if(isset($save)){
 $upload_khan_image_name = $_FILES['khan_image']['name'];
 $upload_khan_image_tmp_name = $_FILES['khan_image']['tmp_name'];
 $location = "../images/";
 
echo $query = "INSERT INTO signs (image) VALUES ('$upload_khan_image_name')";
$result = mysql_query($query);
if($result){
move_uploaded_file($upload_khan_image_tmp_name,$location.$upload_khan_image_name);
  ?>
<script type="text/javascript">
window.location="viewsigns1.php?action=save";
</script>
<?php 
}else{
 echo "try again!";
}
}

?>
<form action="" method="post" name="khan_form" enctype="multipart/form-data">
<table width="600" border="1">
  <tr>
    <td>khan_image</td>
    <td><input name="khan_image" type="file" /></ td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="save"  value="add new khan_image" /></td>
  </tr>
</table>
</form>
</body>
</html>