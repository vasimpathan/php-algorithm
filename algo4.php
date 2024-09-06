<?php 
// There is a collection of input strings and a collection of query strings. For each query string, determine how many times it occurs in the list of input strings. Return an array of the results.

// Function Description

// Complete the function matchingStrings in the editor below. The function must return an array of integers representing the frequency of occurrence of each query string in strings.

// matchingStrings has the following parameters:

// string strings[n] - an array of strings to search
// string queries[q] - an array of query strings
// Returns

// int[q]: an array of results for each query
// Sample Input 1: 
// 	$string =  array('aba','baba','aba','xzxb')
// 	$queries =  array('aba','xzxb','ab')
// 	Sample Output : 1
// 	2
// 	1
// 	0


// Sample Input 2: 
// 	$string
// 	def
// 	de
// 	fgh
// 	$queries
// 	de
// 	lmn
// 	fgh

// 	Sample Output : 1
// 	2
// 	1
// 	0

// Sample Input 3
// 	$string
// 	abcde
// 	sdaklfj
// 	asdjf
// 	na
// 	basdn
// 	sdaklfj
// 	asdjf
// 	na
// 	asdjf
// 	na
// 	basdn
// 	sdaklfj
// 	asdjf
// 	$queries
// 	abcde
// 	sdaklfj
// 	asdjf
// 	na
// 	basdn

// 	Output :
// 	1
// 	3
// 	4
// 	3
// 	2

function matchingStrings($strings, $queries) {
    $arr = array_merge($strings, $queries);
    $newArr = [];
    foreach($queries as $str)
    {
    	// if(in_array($str, $strings))
    	// {
    	// 	$cnt += $cnt+1;
    	// 	$newArr[$str] = $cnt; 
    	// }else{
    	// 	$newArr[$str] = 0;
    	// }

    	$cnt = 0;
    	for($i=0;$i<count($strings);$i++)
    	{
    		if($str == $strings[$i])
    		{
    			$cnt++;
    			$newArr[$str] = $cnt;
    		}
    	}
    	$newArr[$str] = $cnt;

    }
    print_r($newArr);
    
}

$strings = array('aba','baba','aba','xzxb');
$queries = array('aba','xzxb','ab');
$res = matchingStrings($strings, $queries);



?>