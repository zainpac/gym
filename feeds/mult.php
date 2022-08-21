<table><?php 
$a=5;
$b=1;
while ($b<=10) {
	echo "<tr>";
	while ($a<9) {

	echo "<td>$a *$b =".$a * $b." </td>";
		$a++;		
	}
	echo "</tr>";
	$a=5;
	$b++;
}
 ?>
</table>
 