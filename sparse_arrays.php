<?php
//Need to find the Queries each element repeated count in $strings

function matchingStrings($strings, $queries) {
    $result = [];
    
    // Iterate through each query and count its occurrences in the strings array
    // foreach ($queries as $query) {
    //     $result[] = count(array_filter($strings, fn($string) => $string === $query));
    // }


    foreach($queries as $query)
    {
        $count = 0;
        foreach($strings as $string)
        {
            if($query == $string)
            {
                $count++;
            }
        }
        $result[] = $count;
    }
    
    
    return $result;
}

// Example usage:
$strings = ["aba", "baba", "aba", "xzxb"];
$queries = ["aba", "xzxb", "ab"];  //Output [2,1,0]

// Explaination 
//"aba" appears 2 times in $strings.
// "xzxb" appears 1 time in $strings.
// "ab" does not appear in $strings.

//$strings = ["def","de","fgh"];
//$queries = ["de","lmn","fgh"];//Output [1,0,1]


//$strings = ["abcde","sdaklfj","asdjf","na","basdn","sdaklfj","asdjf","na","asdjf","na","basdn","sdaklfj","asdjf"];
//$queries = ["abcde","sdaklfj","asdjf","na","basdn"];//Output [1,3,4,3,2]

$result = matchingStrings($strings, $queries);

// Print the result
foreach ($result as $count) {
    echo $count . "\n";  // Output: 2 1 0
}
?>