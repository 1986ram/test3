<?php
$id= $_GET['q'];




?><?php


$con=mysql_connect("localhost", "root", "sparx");


$db=mysql_select_db("ajay");

?>
<?php
if($id==0)
{
	
	?>
	<select name="ttt"></select>
	<?php
	
}else
{
	?>

<select name="ttt">
	<?php
	
	$sql="select * from state where cid='$id'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
		?>
<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

<?php
}
}
?>
</select>
dfgdf  dd
