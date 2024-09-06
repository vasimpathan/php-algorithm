<?php 
// Find the minimum number

function minNumber($arr)
{
	if(empty($arr))
	{
		return false;
	}

	$minval = $arr[0];

	foreach($arr as $num)
	{
		if($num < $minval)
		{
			$minval = $num;
		}
	}

	echo $minval;

}

$arr = [1,4,2,5,3];
//$arr = ["apple","banana","cat"];

echo "Given array [1,4,2,5,3]<br>";
echo "Miminum number is : ";
$result = minNumber($arr);


?>