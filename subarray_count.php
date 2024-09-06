
<?php 
//2962. Count Subarrays Where Max Element Appears at Least K Times


// Example 1:

// Input: nums = [1,3,2,3,3], k = 2
// Output: 6
// Explanation: The subarrays that contain the element 3 at least 2 times are: [1,3,2,3], [1,3,2,3,3], [3,2,3], [3,2,3,3], [2,3,3] and [3,3].
// Example 2:

// Input: nums = [1,4,2,1], k = 3
// Output: 0
// Explanation: No subarray contains the element 4 at least 3 times.


function countSubarrays($arr, $k) {
    $n = count($arr);
    $count = 0;

    // Iterate over all subarrays
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            $maxElement = $arr[$i];
            $maxCount = 0;

            // Find max element and its count in the current subarray
            for ($l = $i; $l <= $j; $l++) {
                if ($arr[$l] > $maxElement) {
                    $maxElement = $arr[$l];
                    $maxCount = 1;
                } elseif ($arr[$l] == $maxElement) {
                    $maxCount++;
                }
            }

            // Check if max element appears at least k times
            if ($maxCount >= $k) {
                $count++;
            }
        }
    }

    return $count;
}

// Example usage
$arr = [1, 3, 2, 3, 1];
$k = 2;
echo countSubarrays($arr, $k);  // Output: 2

?>