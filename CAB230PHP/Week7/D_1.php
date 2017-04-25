<html>
<head></head>
<body>
<table>
<tr>
<th>x</th>
<th>1</th>
<th>2</th>
<th>3</th>
</tr>

<?php
	 $max = 3; 
     for ($i=1; $i<=$max; $i++){ 
	 	echo "<tr>";
		echo "<th>$i</th>";
		for ($j=1; $j<=$max; $j++){
				$k = $i * $j;
			echo "<td> $k </td>";
		}
     }
?>

<!--

<tr>
<th>1</th>
<td>1</td>
<td>2</td>
<td>3</td>
</tr>

<tr>
<th>2</th>
<td>2</td>
<td>4</td>
<td>6</td>
</tr>

<tr>
<th>3</th>
<td>3</td>
<td>6</td>
<td>9</td>
</tr>
-->




</body>
</html>