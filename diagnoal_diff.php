<?php
//php program Return the absolute difference between the sums of the matrix's two diagonals as a single integer.
//Sample Input
// 11 2 4
// 4 5 6
// 10 8 -12
// Sample Output

// 15
// Explanation

// The primary diagonal is:

// 11
//    5
//      -12
// Sum across the primary diagonal: 11 + 5 - 12 = 4

// The secondary diagonal is:

//      4
//    5
// 10

// Sum across the secondary diagonal: 4 + 5 + 10 = 19
// Difference: |4 - 19| = 15



function diagonalDifference($arr) {
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i++) {
        $primaryDiagonalSum += $arr[$i][$i];
        $secondaryDiagonalSum += $arr[$i][$n - $i - 1];
    }
    
    return abs($primaryDiagonalSum - $secondaryDiagonalSum);
}

// Example usage:
$matrix = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
];

echo diagonalDifference($matrix);  // Output will be 15
?>
