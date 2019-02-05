<?php 
session_start(); 
$connection = mysql_connect("localhost","root" ,"");
if($connection){
$select_db = mysql_select_db("system",$connection);
if(!$select_db){
die( "try again database not found .".mysql_eror());
}
}else{
die( "try  again connection not found.".mysql_eror());
} 
$loginbtn = $_POST['login'];
if($loginbtn){
$login_name = $_POST['login_name'];
$login_password = $_POST['login_password'];
$query = "SELECT * FROM hafeez WHERE username='$login_name' AND password='$login_password'";
$reasult = mysql_query($query);
$count_row = mysql_num_rows($reasult);
//echo "total".$count_row;
if($count_row == 1){
$_SESSION['ttt_login']= $login_name;
//}echo "login"; 
?>
<script type = "text/javascript">
window.location = "index1.php";
</script>
<?php
}else{
echo "try again!";
}
} 
?>

<h2>Login Form</h2>
<hr/>
<form action="" method="post">
<table>
  <tr>
   <td>Login OR User Name:</td>
   <td><input type="text" name="login_name" /></td>
  </tr>
  
  <tr>
   <td>Password:</td>
   <td><input type="password" name="login_password" /></td>
  </tr>

  <tr>
<td></td>
   <td><input type="submit" name="login" value="Log In" /></td>
  </tr>
</table>
</form>

