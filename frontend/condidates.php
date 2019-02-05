<?php  require_once('../includes/header.php');?>
<div class="view_form">
<?php 
$query = "SELECT * FROM condidates ";
$result =mysql_query($query);
echo "<table class='view_table'>";
while($row = mysql_fetch_assoc($result)){
echo "<tr>";
echo "<td><a class='main_menu_li_a' href='condit_detail.php?condit_id=$row[condit_id]'><strong>".$row['condit_name']."</strong></a></td>";
echo "</tr>";
}
echo "</table>";
?>
</div>	
	


<?php  require_once('../includes/footer.php'); ?>

	

