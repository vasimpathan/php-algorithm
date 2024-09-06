<?php 
//In the problem "Subarray Division 1" (also known as "Birthday Chocolate"), you need to find the number of ways to divide a chocolate bar such that the sum of the numbers on a subarray equals a given total. This problem can be solved using a sliding window approach.
// Problem Statement:
// Given an array of integers, where each integer represents the number on a piece of chocolate, and two integers d and m:

// d is the desired sum of the numbers.
// m is the length of the subarray (contiguous pieces of chocolate).
// You need to determine how many ways you can divide the chocolate such that the sum of exactly m consecutive numbers is equal to d.


function birthday($s, $d, $m) {
    $count = 0;
    $n = count($s);
    
    // Iterate over the array with a sliding window of size 'm'
    for ($i = 0; $i <= $n - $m; $i++) {
        // Get the sum of the subarray from index i to i+m
        $sum = array_sum(array_slice($s, $i, $m));
        
        // If the sum matches 'd', increment the count
        if ($sum == $d) {
            $count++;
        }
    }
    
    return $count;
}

// Example usage:
$s = [1, 2, 1, 3, 2];
$d = 3;
$m = 2;
echo birthday($s, $d, $m);  // Output: 2
?>