<?php
  echo "<h2>Write a PHP script to delete a specific value from an array using array_filter() function.</h2>";
  $arr1 = [1,45,45,5,33,6];
  print_r(array_filter($arr1,"test"));
  function test($val){
      return $val-45;
  }

?>