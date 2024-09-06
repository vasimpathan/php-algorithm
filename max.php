<?php 

// Find the max number from arr

function maxNumber($arr)
{
	if(empty($arr))
	{
		return false;
	}

	$maxnum = $arr[0];

	foreach($arr as $num)
	{
		if($num > $maxnum)
		{
			$maxnum = $num;
		}
	}
	echo $maxnum;

}

$arr = [1,4,2,5,3];
//$arr = ["apple","banana","cat"];

echo "Given array [1,4,2,5,3]<br>";
echo "Maximum number is : ";
$result = maxNumber($arr);

?>