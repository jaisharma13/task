
<?php

$arr = [1, 2, 3, 4, 5];
$len = count($arr);


$res =array();

for ($i=0; $i<=$len ; $i++) 
{ 
   $arr1= array_filter($arr, function($v, $k)
    {
        global $i;
        return $k != $i;

    },
    ARRAY_FILTER_USE_BOTH);
    array_push($res, array_product($arr1)); 
}
print_r($res);

?>