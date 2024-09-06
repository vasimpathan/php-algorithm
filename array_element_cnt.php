<?php 
// program to count the number of time element comes in array without function


// $array = array(1, 2, 2, 3, 4, 4, 4, 5);
// $counted = array(); 

// for($i = 0; $i < count($array); $i++) {
//     $found = false;

//     for($j = 0; $j < count($counted); $j++) {
//         if($counted[$j]['value'] == $array[$i]) {
//             $counted[$j]['count']++;
//             $found = true;
//             break;
//         }
//     }

//     if(!$found) {
//         $counted[] = array('value' => $array[$i], 'count' => 1);
//     }
// }

// foreach($counted as $item) {
//     echo $item['value'] . " occurs " . $item['count'] . " time(s)" . "<br>";
// }

// Way 2

$array = array(1, 2, 2, 3, 4, 4, 4, 5);
$counts = array();

for($i = 0; $i < count($array); $i++) {
    $element = $array[$i];
    
    if(isset($counts[$element])) {
        $counts[$element]++;
    } else {
        $counts[$element] = 1;
    }
}

foreach($counts as $element => $count) {
    echo "$element occurs $count time(s)<br>";
}



?>