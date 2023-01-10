<?php

function FindMaxSum($arr, $n)
{
	$incl = $arr[0];
	$excl = 0;
	$excl_new;
	$i;

for ($i = 1; $i <$n; $i++)
{

	$excl_new = ($incl > $excl)? $incl: $excl;

	$incl = $excl + $arr[$i];
	$excl = $excl_new;
}


return (($incl > $excl)? $incl : $excl);
}


$arr = array(5,4,2,5);
$n = sizeof($arr);
echo FindMaxSum($arr, $n);
	

?>
