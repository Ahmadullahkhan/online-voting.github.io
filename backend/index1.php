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
window.location="login.php";
</script>
<?php }else{
echo $_SESSION['ttt_login'];
?>
<a href="logout.php">Log Out</a>
<?php } ?>
</body>
</html>
