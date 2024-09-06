<?php 
//Lonely Integer
// Given an array of integers, where all elements but one occur twice, find the unique element.
//$a = [1,2,3,4,3,2,1];
//The unique element is : 4




function lonelyinteger($a)
{
	$new = [];

	for($i=0;$i<count($a);$i++)
	{
		$element = $a[$i];

		if(isset($new[$element]))
		{
			$new[$element]++;
		}else{
			$new[$element] = 1;
		}
	}

	foreach($new as $num=>$cnt)
	{
		if($cnt == 1)
		{
			return $num;
		}
	}
}

$a = [1,2,3,4,3,2,1];
echo "<pre>";print_r($a);
$unique = lonelyinteger($a);
echo "The lonely/unique number is : " .$unique;

?>