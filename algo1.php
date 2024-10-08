
<?php 
// Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with  places after the decimal.

// Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to  are acceptable.

// Example

// There are  elements, two positive, two negative and one zero. Their ratios are ,  and . Results are printed as:

// 0.400000
// 0.400000
// 0.200000
// Function Description

// Complete the plusMinus function in the editor below.

// plusMinus has the following parameter(s):

// int arr[n]: an array of integers
// Print
// Print the ratios of positive, negative and zero values in the array. Each value should be printed on a separate line with  digits after the decimal. The function should not return a value.

// Input Format

// The first line contains an integer, , the size of the array.
// The second line contains  space-separated integers that describe .

// Constraints



// Output Format

// Print the following  lines, each to  decimals:

// proportion of positive values
// proportion of negative values
// proportion of zeros
// Sample Input

// STDIN           Function
// -----           --------
// 6               arr[] size n = 6
// -4 3 -9 0 4 1   arr = [-4, 3, -9, 0, 4, 1]
// Sample Output

// 0.500000
// 0.333333
// 0.166667
// Explanation

// There are 3 positive numbers, 2 negative numbers, and 1 zero in the array.
// The proportions of occurrence are positive: 3/6 = 0.500000 , negative: 2/6 = 0.333333 and zeros: 1/6 = 0.166667 .

function plusMinus($arr,$numDivide) {
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $div = $numDivide;
    $output = '';
    
    foreach($arr as $num)
    {
        if($num == 0)
        {
            $zero++;
        }
        
        if($num < 0)
        {
            $negative++;
        }
        
        if($num > 0)
        {
            $positive++;
        }
    }
     
    
    $output .= number_format(($positive / $div),6).'<br>';
    $output .= number_format(($negative / $div),6).'<br>';
    $output .= number_format(($zero / $div),6).'<br>';
    
    echo $output;
        

}

$numDivide = 6;
$arr = array(-4,3,-9,0,4,1);

plusMinus($arr,$numDivide);

?>