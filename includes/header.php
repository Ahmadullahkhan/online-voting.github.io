<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Voting System </title>
<link href="../css/default.css" rel="stylesheet" type="text/css" />
</head>
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
?>
<body>
<div id="main-wrapper">
  <div class="sub-wrapper">
    <div id="mian-header">
	 <div class="logo">
	 <img src="../images/lg.jpg" width="400"height="200" />
	 </div>
	  <div class="logo-text">
	  <img src="../images/rahm.jpg" width="400"height="200" />
	 </div>
	  <div class="logo-right">
	  <img src="../images/llm.jpg" width="400"height="200" />
	 </div>
	 
	
	 <div id="main-menu"> 
	 <ul id="main_menu">
	  <li class="main_menu_li"><a class="main_menu_li_a" href="../index.php"><strong>Home</strong></a></li>
	 <li class="main_menu_li"><a class="main_menu_li_a" href="../frontend/condidates.php"><strong>Condidates</strong></a>
	 <ul class="sub_ul">
     <li class="sub_li"><a class="main_menu_li_a" href="../frontend/nacondidates.php"><strong>NA Condidates </strong></a></li>	
	 <li class="sub_li"><a class="main_menu_li_a" href="../frontend/pacondidates.php"><strong>PA Condidates</strong></a></li>	 
	 </ul>
	 </li>
	 <li class="main_menu_li"><a class="main_menu_li_a" href="../frontend/searchvoter.php"><strong>Search</strong></a></li>
	 <li class="main_menu_li"><a class="main_menu_li_a" href="../frontend/countvotes.php"><strong>Result</strong></a>
     <ul class="sub_ul">
     <li class="sub_li"><a class="main_menu_li_a" href="../frontend/countvotes.php?id=na"><strong>NA </strong></a></li>	
	 <li class="sub_li"><a class="main_menu_li_a" href="../frontend/countvotes.php?id=pa"><strong>PA</strong></a></li>	 
	 </ul>
	 </li>
	 <li class="main_menu_li"><a class="main_menu_li_a" href="../backend/admin.php"><strong>Login</strong></a></li>
	 </ul>
	 </div>
	 <div class="container"></div>
	 <div class="container1"> 
	 <div id="online"><h1>Online Election <em>Perfection</em></h1></div>
    		<h4><div id="mid-text">Simply a web-based online voting system that will help you manage your elections easily and securely.
			The voter can not poll there vote more than once.The  main advantage of online voting system is saving time........... </div></h4>

	 </div>
	 <div class="container2"></div>
	</div>
	
	<div id="main-content">