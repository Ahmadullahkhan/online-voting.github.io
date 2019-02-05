

<script type="text/javascript" src="js/jquery.js"></script>

<script language="javascript">

function boom()

{

var na=document.getElementById('name').value;

//alert(na);

if(na.length<2)

{

document.getElementById('nam').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('nam').style.color="red";

}

else

{

document.getElementById('nam').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";



}



}

function boom2()

{

var co=document.getElementById('nic').value;

//alert(na);

if(co.length<15)

{

document.getElementById('con').innerHTML="<img src=../images/svn_deleted.png width=24 height=24/>";

document.getElementById('con').style.color="red";



}

else

{

document.getElementById('con').innerHTML="<img src=../images/svn_normal.png width=24 height=24 />";



//document.getElementById('con').style.color="green";

}



}

function pata()

{

var adr=document.getElementById('address').value;

//alert(na);

if(adr.length<2)

{

document.getElementById('add').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('add').style.color="red";

}

else

{

document.getElementById('add').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('add').style.color="green";

}



}

function mulk()

{

var mlk=document.getElementById('country').value;

//alert(na);

if(mlk.length<2)

{

document.getElementById('contry').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('contry').style.color="red";

}

else

{

document.getElementById('contry').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('contry').style.color="green";

}



}

function shar()

{

var shr=document.getElementById('city').value;

//alert(na);

if(shr.length<2)

{

document.getElementById('cty').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

document.getElementById('cty').style.color="red";

}

else

{

document.getElementById('cty').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('cty').style.color="green";

}



}

function userka()

{

var usernam=document.getElementById('username').value;

//alert(na);

if(usernam.length<3)

{

document.getElementById('user').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

document.getElementById('user').style.color="red";

}

else

{

document.getElementById('user').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('user').style.color="green";

}



}

function lock()

{

var passwo=document.getElementById('password').value;

//alert(na);

if(passwo.length<6)

{

document.getElementById('pass').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('pass').style.color="red";

}

else

{

document.getElementById('pass').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('pass').style.color="green";

}



}



function lock2()

{

var passwo=document.getElementById('password').value;

var pswrd=document.getElementById('repass').value;

//alert(na);

if(pswrd.length<5 || passwo!=pswrd)

{

document.getElementById('repas').innerHTML="Be careful !";

document.getElementById('repas').style.color="red";

}

else

{

document.getElementById('repas').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('repas').style.color="green";

}



}

function check()

{

var maile=document.getElementById('email').value;

document.getElementById('mail').value=maile;

var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

if(filter.test(maile)==false)

{

document.getElementById('mail').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('mail').style.color="red";

}

else

{

document.getElementById('mail').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('mail').style.color="green";

//document.getElementById('email').style.backgroundColor="#FFFFFF";

}

}

//////////////////////////////////////////////FuLLLLLL////////////////////////////////////////////////////////////////////////

function fulltun()

{



var na=document.getElementById('name').value;

var co=document.getElementById('nic').value;

var adr=document.getElementById('address').value;

var mlk=document.getElementById('country').value;

var shr=document.getElementById('city').value;

var usernam=document.getElementById('username').value;

var passwo=document.getElementById('password').value;

var pswrd=document.getElementById('repass').value;

var maile=document.getElementById('email').value;

var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;



if(na.length<2||co.length<2||adr.length<2||mlk.length<2||shr.length<2||usernam.length<3||passwo.length<6||pswrd.length<5||passwo!=pswrd||filter.test(maile)==false)

{

if(na.length<2)

{

document.getElementById('nam').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

document.getElementById('nam').style.color="red";

}

else

{

document.getElementById('nam').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('nam').style.color="green";

}

if(co.length<2)

{

document.getElementById('con').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

document.getElementById('con').style.color="red";

}

else

{

document.getElementById('con').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('con').style.color="green";

}

if(adr.length<2)

{

document.getElementById('add').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('add').style.color="red";

}

else

{

document.getElementById('add').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('add').style.color="green";

}

if(mlk.length<2)

{

document.getElementById('contry').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('contry').style.color="red";

}

else

{

document.getElementById('contry').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('contry').style.color="green";

}

if(shr.length<2)

{

document.getElementById('cty').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('cty').style.color="red";

}

else

{

document.getElementById('cty').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('cty').style.color="green";

}

if(usernam.length<3)

{

document.getElementById('user').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('user').style.color="red";

}

else

{

document.getElementById('user').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('user').style.color="green";

}

if(passwo.length<6)

{

document.getElementById('pass').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('pass').style.color="red";

}

else

{

document.getElementById('pass').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('pass').style.color="green";

}



if(pswrd.length<5 || passwo!=pswrd)

{

document.getElementById('repas').innerHTML="Be careful !";

document.getElementById('repas').style.color="red";

}

else

{

document.getElementById('repas').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('repas').style.color="green";

}

if(filter.test(maile)==false)

{

document.getElementById('mail').innerHTML="<img src=images/svn_deleted.png width=24 height=24/>";

//document.getElementById('mail').style.color="red";

}

else

{

document.getElementById('mail').innerHTML="<img src=images/svn_normal.png width=24 height=24 />";

//document.getElementById('mail').style.color="green";

//document.getElementById('email').style.backgroundColor="#FFFFFF";

}

}

else

{



document.form2.submit();

}



}





function checkSearch(){



	var  myRegExp = new RegExp(/\d{5}-\d{7}-\d/);

	 var voter_nic = $('#nic').val();

	if(voter_nic ==''){

       alert("Plase enter voter cnic number");

       return false;

	 }else if (!myRegExp.test(voter_nic)) {

     alert("Plase enter valid  voter voter cnic number");

       return false;

     }

}





</script>

<?php  require_once('../includes/header.php');?>

<div class="view_form">

<form action="voter_detail.php" method="post" onsubmit="return checkSearch()">

<table class='view_table'>

	<tr>

      <td>By Code:</td>

	  <td><input type="text" name="nic" id="nic" class="search2" onkeyup="boom2()"/>

	  <span id="con"></span></td>

	</tr>

	<tr>

	<td></td>

	<td><input type="submit" value="Search" name="search"  class="submit"/></td>

	</tr>

</table>

</form>

</div>	

	





<?php  require_once('../includes/footer.php'); ?>



	



