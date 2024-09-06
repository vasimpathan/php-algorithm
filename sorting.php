<?php 
//Sorting 

// Sample Input: unsorted
// 	31415926535897932384626433832795
// 	1
// 	3
// 	10
// 	3
// 	5

// Sample Output : sorted
// 	1
// 	3
// 	3
// 	5
// 	10
// 	31415926535897932384626433832795



function sorting($array, $order)
{
	$n = count($array);
    
    // Traverse through all elements in the array
    for ($i = 0; $i < $n - 1; $i++) {
        // Last i elements are already in place

    	// echo $n. "-". $i. "-1 = ".$n - $i - 1;
    	// echo "<br>";

        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if($order == 'asc')
            {
            	if($array[$j] > $array[$j + 1])
            	{
            		$temp = $array[$j];
	            	$array[$j] = $array[$j + 1];
	            	$array[$j + 1] = $temp; 	
            	}
            	
            }

            if($order == 'desc')
            {
            	if($array[$j] < $array[$j + 1])
            	{
            		$temp = $array[$j];
            		$array[$j] = $array[$j + 1];
            		$array[$j + 1] = $temp;
            	}
            }
            
        }
    }

	return $array;
}

$unsorted = [5,2,1,3,4];
//$unsorted = ["apple","banana"];

echo "Unsorted Array : [5,2,1,3,4] <br>";
echo "Sorted Array : ";
$result = sorting($unsorted, 'desc');
echo "<pre>";
print_r($result);
