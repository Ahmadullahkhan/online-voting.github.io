<?php session_start(); 
ini_set('display_errors', 0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<h1>Welcome to home page</h1>
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
<a href="admin.php">Back</a><br>
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


if(intval($sign_id) && $action == 'del'){
$unlinkquery = "SELECT * FROM signs WHERE sign_id=".$sign_id;
$unlinkresult = mysql_query($unlinkquery);
$unlinkrow = mysql_fetch_assoc($unlinkresult);
$delimage = $unlinkrow['image'];

$delquery = "DELETE FROM signs WHERE sign_id=".$sign_id;
$delresult = mysql_query($delquery);
if($delresult){
unlink('../images/'.$delimage);
echo "One Record deleted !";
}
}


if($action == 'save'){
echo "One Record Added !";
}

$query = "SELECT * FROM signs";
$result = mysql_query($query);
echo "<table width=400>";
echo "<tr><th>Id</th><th>Image</th><th>Edit</th><th>Delete</th></tr>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row['sign_id']."</td>";
echo "<td><img src='../images/$row[image]' width=40 height=40 /><td>";
echo "<td><a href='addsign.php?sign_id=$row[sign_id]&action=edit'>Edit</a></td>";
echo "<td><a href='viewsigns.php?sign_id=$row[sign_id]&action=del'>Delete</a></td>";
?>
<?php echo "</tr>";
}
echo "</table>";





?>
</body>
</html>
