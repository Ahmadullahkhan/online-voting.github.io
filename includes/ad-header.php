<?php session_start(); 
ini_set('display_errors', 0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<?php 
ini_set('display_errors', 0);
if(empty($_SESSION['admin_login'])){ /// $_SESSION['admin_login'] == ""
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php }else{
echo $_SESSION['admin_login'];
?>
<a href="logout.php"><h3>Log Out</h3></a>
<a href="admin.php"><h3>BACK</h3></a>

<?php } 
$connection = mysql_connect("localhost","root","");
if($connection){
$select_db = mysql_select_db("project",$connection);
if(!$select_db){
die("Try Again Database Not Found.".mysql_error());
}
}else{
die("Try Again Connection Not Found.".mysql_error());
}
?>