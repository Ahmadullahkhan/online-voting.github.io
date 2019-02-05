<?php  require_once('../includes/header.php');?>
<div class="view_form">
<?php 
//echo $query = "SELECT * FROM condidates WHERE na_pa_id='NA' OR na_pa_id='na'";('NA','na','Na')";
$query = "SELECT * FROM condidates WHERE na_pa_id =1";
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

	

