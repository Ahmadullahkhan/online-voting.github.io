<?php

 session_start(); 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/default.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>
<body>
<div id="main-wrapper">
  <div class="sub-wrapper">
    <div id="mian-header">
	 <div class="logo">
	 <img src="../images/lg.jpg" width="400" height="200" />
	 </div>
	 <div class="logo-text">
	 <img src="../images/rahm.jpg" width="400" height="200" />
	 </div>
	  <div class="logo-right">
	 <img src="../images/llm.jpg"width="400" height="200"  />
	 </div>
	 <div id="main-menu">
	 <ul id="main_menu">
	 <li class="main_menu_li"><a class="main_menu_li_a" href="addcondidate.php"><strong>Add Condidates</strong></a>
	 </li>
	 <li class="main_menu_li"><a class="main_menu_li_a" href="addvote.php">Add Voter</a></li>
	 <li class="main_menu_li"><a class="main_menu_li_a" href="addsign.php">Add sign</a></li>
	 
	 <li class="main_menu_li"><a class="main_menu_li_a" href="addlocation.php">Add location</a></li>
	  <li class="main_menu_li" color=red><a class="main_menu_li_a" href="addna_pa.php">Add NA/PA  </a></li>
	 </ul>
	 </div>
	</div>
	
	
	<div id="main-content">
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
<a href="logout.php">Log Out</a>
<?php } ?>


<div id="main-content">
	  <div class="container"></div>
	 <div class="container1"> 
	 <div id="online"><h1>Online Election <em>Perfection</em></h1></div>
    		<h4><div id="mid-text">Simply a web-based online voting system that will help you manage your elections easily and securely.
			The voter can not poll there vote more than once.The  main advantage of online voting system is saving time. </div></h4>

	 </div>
	
	 <div class="container2"></div>
	       <div id="footer">
	<span class="footer"><h3>Design & Developed By:Hafeez Mashwani And Nigar Ahmad</h3></span>
	</div>
	</div>
      
		</div>

	
  </div>
</div>
</body>
</html>
