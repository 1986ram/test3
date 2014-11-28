<?php
echo "<table>";

for($i=1;$i<=5;$i++)
{
	echo "<tr>";
	
	for($j=1;$j<=5;$j++)
	{
		
		
		if($i==1)
		{
			echo "<td>".'*'." "."</td>";
					
		}
		
		
		if($i==2)
		{
			if($j==1 or $j==5)
			{
			echo "<td>".'*'." "."</td>";
			
		}else
		{
			
		echo "<td>".''." "."</td>";	
			
		}
	}
	
	
	if($i==3)
		{
			if($j==1 or $j==5)
			{
			echo "<td>".'*'." "."</td>";
			
		}else
		{
			
		echo "<td>".''." "."</td>";	
			
		}
	}
		
	if($i==4)
		{
			if($j==1 or $j==5)
			{
			echo "<td>".'*'." "."</td>";
			
		}else
		{
			
		echo "<td>".''." "."</td>";	
			
		}
	}
		
	
	
	
		if($i==5)
		{
			echo "<td>".'*'." "."</td>";
					
		}
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		
	}
	
	echo "</tr>";
	
	
	
	
	
}
echo "</table>";
?>
