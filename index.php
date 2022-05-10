<?php
echo "<h2>Write a PHP program to filter out some elements with certain key-names.</h2>";
$arr1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$arr2 = array('c2', 'c4');
$result = array_diff_key($arr1,array_flip($arr2));
print_r($result);
?>