<?php
echo "<h2>Write a PHP script that inserts a new item in an array in any position</h2>";
$arr = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = array_sum($arr);
$sum = $sum/count($arr);
echo "Average temprature is:"." ".$sum."<br>";
$result=array_unique($arr);
sort($result);
echo "List of seven lowest temperatures :";
$num=1;
for($i=0;$i<8;$i++){
    echo $result[$i].",";
}
echo "<br>";
echo "List of seven highest temperatures :";
rsort($result);
for($i=0;$i<8;$i++){
  echo $result[$i].",";
}

?>