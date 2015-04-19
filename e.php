<?php
$iterations = 10;
$num1 = 0;
$num2 = 1;
for ( $i=2; $i<$iterations; $i++ )
{
$sum = $num1 + $num2;
$num1 = $num2;
$num2 = $sum;
echo "  ";
echo $sum;
}

?>
