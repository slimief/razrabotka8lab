<?php
$number = array(
    0 => array("5","7","6",),
    1 => array("2","5","65"),
    2 => array("1","6","7")
); 
end($number);
$max = key($number);
$sum = 0;
for ($i = 0; $i <= $max; ++$i) {
    $sum += $number[$i][$i];
}
echo $sum;
?>
