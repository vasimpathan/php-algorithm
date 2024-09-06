
<?php 

function findMedian($arr)
{
	sort($arr);
    $pos = count($arr) / 2;
    return $arr[$pos];
}

$arr = [0,1,2,4,6,5,3]; // output should 3

findMedian($arr);
?>