<?php
  function firstPos(array $arr) {
    $set = [];

    foreach ($arr as $value) {
      if ($value > 0) {
        $set[$value] = $value;
      }
    }
    for ($i = 1; isset($set[$i]); $i++);
    return $i;
  }
  echo firstPos(array(1, 2, 0,3,5,6));


 
echo "<pre>";

//   function missing_number($num_list)
// {
//  // construct a new array
// $new_arr = range($num_list[0],max($num_list));                                                    
// // use array_diff to find the missing elements 
// return array_diff($new_arr, $num_list);

// }
// print_r(missing_number(array(1,2,3,4,6,7,8)));

  ?>