<?php 
// You will be given a list of 32 bit unsigned integers. Flip all the bits (1->0 and 0->1 ) and return the result as an unsigned integer.

// Example

// . We're working with 32 bits, so:



// Return .

// Function Description

// Complete the flippingBits function in the editor below.

// flippingBits has the following parameter(s):
// int n: an integer

// Returns
// int: the unsigned decimal integer result

// Input Format
// The first line of the input contains q, the number of queries.
// Each of the next 1 lines contain an integer, n, to process.

// Sample Input
// 3 
// 2147483647 
// 1 
// 0


// Sample Output
// 2147483648 
// 4294967294 
// 4294967295

// Explanation
// Take 1 for example, as unsigned 32-bits is 00000000000000000000000000000001 and doing the flipping we get 11111111111111111111111111111110 which in turn is 4294967294.


function flippingBits($n) {
    // Define a 32-bit mask
    $mask = 0xFFFFFFFF;
    // Flip the bits and apply the mask
    $result = ~$n & $mask;
    return $result;
}

// Sample input
$input = [2147483647, 1, 0];

// Process each input and flip the bits
foreach ($input as $number) {
    $flippedNumber = flippingBits($number);
    echo $flippedNumber . "<br>";
}




//chatgpt
// function flipBits($n) {
//     // Define a 32-bit mask
//     $mask = 0xFFFFFFFF;
//     // Flip the bits and apply the mask
//     $result = ~$n & $mask;
//     return $result;
// }

// // Example usage:
// $number = 43261596;  // Example 32-bit unsigned integer
// $flippedNumber = flipBits($number);
// echo $flippedNumber;  // Output: 4251705699

?>