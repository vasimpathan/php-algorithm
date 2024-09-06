<?php 
// FizeBuzz
// Given a number n, for each integer i in the range from 1;to n inclusive, print one value per line as follows:
// 	If i is a multiple of both 3 and 5, print FizzBuzz
// 	If i is a multiple of 3 (but not 5), print Fizz.
// 	If i is a multiple of 5 (but not 3), print Buzz.
// 	If i is not a multiple of 3&nbsp;or 5, print the value of i.

// Sample Input 
// STDIN    Function
// -----    --------
// 15    →  n = 15

// Sample Output 
// 1     
// 2
// Fizz
// 4
// Buzz
// Fizz
// 7
// 8
// Fizz
// Buzz
// 11
// Fizz
// 13
// 14
// FizzBuzz

// Explaination:
// The numbers 3, 6, 9, and 12 are multiples of 3 (but not 5), so print Fizz on those lines.
// The numbers 5 and 10 are multiples of 5 (but not 3), so print Buzz on those lines.
// The number 15 is a multiple of both 3 and 5, so print FizzBuzz on that line.
// None of the other values is a multiple of either 3 or 5, so print the value of i on those lines.

function fizzBuzz($n)
{

	for($i=1;$i<=15;$i++)
	{
		if(($i%3) == 0 && ($i%5)==0)
		{
			echo "FizeBuzz<br>";
		}

		if(($i%3)==0 && ($i%5)!=0)
		{
			echo "Fizz<br>";
		}
		if(($i%3)!=0 && ($i%5)==0)
		{
			echo "Buzz<br>";
		}
		if(($i%3) !=0 && ($i%5)!=0)
		{
			echo $i.'<br>';
		}
	}
}


$n = 15;

fizzBuzz($n);


?>