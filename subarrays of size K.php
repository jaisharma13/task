<?php


function printKMax($arr, $N, $K)
{
	$j; $max;

	for ($i = 0; $i <= $N - $K; $i++)
	{
		$max = $arr[$i];

		for ($j = 1; $j < $K; $j++)
		{
			if ($arr[$i + $j] > $max)
			$max = $arr[$i + $j];
		}
		printf("%d ", $max);
	}
}


$arr = array(1, 2, 3, 4, 5,
			6, 7, 8, 9, 10);
$N = count($arr);
$K = 3;


printKMax($arr, $N, $K);


?>
