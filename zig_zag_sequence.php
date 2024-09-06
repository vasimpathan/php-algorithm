<?php 

//Zing Zag sequence
function zigzagSequence(&$arr) {
    sort($arr);  // Step 1: Sort the array

    $n = count($arr);
    $k = ($n + 1) / 2;

    // Step 3: Create the zigzag pattern
    $mid = $k - 1;  // Middle index (0-based index)

    // Swap the middle element with the last element
    $temp = $arr[$mid];
    $arr[$mid] = $arr[$n - 1];
    $arr[$n - 1] = $temp;

    // Reverse the second part of the array to make it decreasing
    $left = $mid + 1;
    $right = $n - 2;

    while ($left < $right) {
        $temp = $arr[$left];
        $arr[$left] = $arr[$right];
        $arr[$right] = $temp;
        $left++;
        $right--;
    }
}

// Example usage:
$arr = [2, 3, 5, 1, 4, 6];
zigzagSequence($arr);
print_r($arr);


?>