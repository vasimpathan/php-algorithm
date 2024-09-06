<?php 
// Find the repeated number and there count from array


function getElementCount($arr)
{
	$new = [];

	for($i=0;$i<count($arr);$i++)
	{
		$element = $arr[$i];

		if(isset($new[$element]))
		{
			$new[$element]++;
		}else{
			$new[$element] = 1;
		}
	}

	foreach($new as $num=>$count)
	{
		echo $num . ' is repeated '.$count .' times'."<br>";
	}

}


$arr = [1,2,3,4,5,2,3,1,4,1,2,"vasim","pathan","vasim",-1,-2,-1];

$result = getElementCount($arr);

?>