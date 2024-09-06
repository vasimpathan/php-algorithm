<?php 
//Plus Minus
// $arr = [1,1,0,-1,-1];
// There are n=5 elements, two positive, two negative and one zero. Their ratios are 2/5 = 0.400000 , 2/5 = 0.400000 and 1/5=0.200000. Results are printed as:

// 0.400000
// 0.400000
// 0.200000

// Explanation:
// print the following  lines, each to  decimals:

// proportion of positive values
// proportion of negative values
// proportion of zeros

function plusMinus($arr) {
   $len = count($arr);
    $p = 0;
    $n = 0;
    $z = 0;
    $new = [];
    foreach($arr as $row)
    {
        if($row > 0)
        {
            $p++;
        }
        
        if($row == 0)
        {
            $z++;
        }
        
        if($row < 0)
        {
            $n++;
        }
    }
    echo number_format($p/$len, 6). "<br>".number_format($n/$len,6)."<br>".number_format($z/$len,6);


}
$arr = [1,1,0,-1,-1];
plusMinus($arr);
?>