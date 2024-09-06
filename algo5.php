<?php 
// Given an array of integers, where all elements but one occur twice, find the unique element.

// Example $a = [1,2,3,4,3,2,1]

// The unique element is . 4

// Function Description

// Complete the lonelyinteger function in the editor below.

// lonelyinteger has the following parameter(s):

// int a[n]: an array of integers
// Returns

// int: the element that occurs only once
// Input Format

// The first line contains a single integer, , the number of integers in the array.
// The second line contains  space-separated integers that describe the values in .


function lonelyinteger($a) {
   
   $length = count($a);
   $newarr = [];
   

   for($i=0;$i<$length;$i++)
   {
   	for($j=$i+1;$j<$length;$j++)
   	{
   		if($a[$i] == $a[$j])
   		{
   			array_push($newarr,$a[$j]) ;
   		}
   	}
   }
   $output = array_diff($a,$newarr);
   return implode(" ",$output);

}
//$a = [1,2,3,4,3,2,1]; // case1
//$a = [1,1,2]; // case2
//$a = [0,0,1,2,1]; // case3
$a = [1]; // case4
echo $result = lonelyinteger($a);

?>
