<?php 

$arr = array(2,5,3,1);
// swap 2 number
// array(1,5,3,2);
// array(1,2,3,5);
// array(1,2,5,3);
// array(1,2,3,5); - output


$sort = [];
for($i=0;$i<count($arr);$i++)
{
	for($j=$i;$j<count($arr);$j++)
	{
		if($arr[$i] < $arr[$j])
		{
			array_push($sort,$arr[$j]);
		}
	}
}
print_r($sort);

?>