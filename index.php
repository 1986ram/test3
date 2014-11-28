<?php


$con=mysql_connect("localhost", "root", "sparx");


$db=mysql_select_db("ajay");

echo "<table border='1'>";
echo "<tr><th>#</th><th>Name</th><th>TEAMLEADER</th></tr>";
$i=0;

$sql="SELECT a.name, b.name
FROM emplopyee a, emplopyee b
WHERE a.id = b.ti_id

LIMIT 0 , 30";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{
	$i++;
	
	echo "<tr>";
	echo "<td>".$i."</td>";
	
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[0]."</td>";
	echo "</tr>";
	
	
	
}

echo "</table>";

?>
