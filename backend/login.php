<?php





 

session_start();

require_once("../includes/header.php");

// how to get values from form

// method is 

$loginbtn = $_POST['login'];

if($loginbtn){

$login_name = $_POST['login_name'];

$login_password = $_POST['login_password'];

$query = "SELECT * FROM users WHERE user_name='$login_name' AND user_password='$login_password'";

$result = mysql_query($query);

$count_row = mysql_num_rows($result); 

//echo "total".$count_row;

if($count_row == 1){

$_SESSION['admin_login'] = $login_name;

//echo "login";

//header("Location:index.php");

?>

<script type="text/javascript">

window.location="admin.php";

</script>

<?php

}else{

?>

<script>



alert("Incorrect UserName or Password");

</script>

<?php



}

}

?>

<script>



function validateForm() {

    var x = document.forms["frm1"]["name"].value;

    if (x == null || x == "") {

        alert("Please Enter UserName");

        return false;

    }

	var y = document.forms["frm1"]["pass"].value;

	if (y== null || y == "") {

        alert("Please Enter Password");

        return false;

    }

}



</script>

<div >

<h2>Login Form</h2>

<hr/>

<form  name="frm1" action="" method="post" onsubmit="return validateForm()">

<table>

  <tr>

   <td>Login OR User Name:</td>

   <td><input type="text" name="login_name" id="name"/></td>

  </tr>

  

  <tr>

   <td>Password:</td>

   <td><input type="password" name="login_password" id="pass" /></td>

  </tr>



  <tr>

<td></td>

   <td><input type="submit" name="login" value="Log In" /></td>

  </tr>

</table>

</form>

</div>

<?php require_once("../includes/footer-admin.php"); ?>