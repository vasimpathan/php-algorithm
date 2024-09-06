<?php 
//2444. Count Subarrays With Fixed Bounds

// Example 1:

// Input: nums = [1,3,5,2,7,5], minK = 1, maxK = 5
// Output: 2
// Explanation: The fixed-bound subarrays are [1,3,5] and [1,3,5,2].
// Example 2:

// Input: nums = [1,1,1,1], minK = 1, maxK = 1
// Output: 10
// Explanation: Every subarray of nums is a fixed-bound subarray. There are 10 possible subarrays.


$arr = [4, 3, 2];
for($i=0;$i<count($arr);$i++)
{
	for($j=$i;$j<count($arr);$j++)
	{	
		$new = '';
		for($l=$i;$l<=$j;$l++)
		{
			//array_push($new,$arr[$l]);
			$new .= $arr[$l].',';
		}

	echo "<pre>";
	echo $new.'<br>';
	}
}





?>