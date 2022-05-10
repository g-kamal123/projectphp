<?php
echo "<h2>Write a PHP script that inserts a new item in an array in any position</h2>";
$arr = array(1,2,3,4,5);
array_splice($arr,3,0,'$');
foreach($arr as $val){
    echo $val." ";
}
?>