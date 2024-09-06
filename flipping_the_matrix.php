
<?php 
// [112 42 83 119
// 56 125 56 49
// 15 78 101 43
// 62 98 114 108]

// sample input 
// [[1,2],[3,4]]

// 1 2
// 3 4

// 1 2
// 4 3

// Reverse column 0
// 4 2
// 1 3

// the maximum num : 4


$arr = array(
			array(112,42,83,119),
			array(56,125,56,49),
			array(15,78,101,43),
			array(62,98,114,108)
);


echo "<pre>";
print_r($arr);

$column_arr = []; 
$column_reverse_arr =[];
for($i=0;$i<count($arr);$i++)
{
	array_push($column_arr,$arr[$i][2]);
}

print_r($column_arr);
for($j=count($column_arr)-1;$j>=0;$j--)
{
	array_push($column_reverse_arr, $column_arr[$j]);
}

for($k=0;$k<count($arr);$k++)
{
	$arr[$k][2] = $column_reverse_arr[$k];
}
print_r($column_reverse_arr);

?>
