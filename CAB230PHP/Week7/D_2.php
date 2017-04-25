<html>
<head></head>
<body>
<table>

<?php

	$max = 12; 
	echo "<tr>";
	echo "<th></th>";
    for ($h=1; $h<=$max; $h++){ 
		echo "<th>$h</th>";
	}		
	echo "<tr>";
    for ($i=1; $i<=$max; $i++){ 
		echo "<tr>";
		echo "<th>$i</th>";
		for ($j=1; $j<=12; $j++){ 
		    $k = $i * $j;
			echo "<td>$k</td>";
		}
		echo "</tr>";
	}
?>


</body>
</html>