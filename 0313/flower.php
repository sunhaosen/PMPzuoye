<?php
$n = 1000;
echo flower($n);
function flower($n)
{
	for ($i=1; $i <= $n; $i++) 
	{ 
		if (strlen($i) != 3) 
		{
			continue;
		}
		$a = floor($i/100);
		$b = floor(($i%100)/10);
		$c = $i%10;
		$sum = pow($a,3) + pow($b,3) + pow($c,3);
		if ($sum == $i) 
		{
			echo $i;
			echo "<br/>";
		}
	}
}