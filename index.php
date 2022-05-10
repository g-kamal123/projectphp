<?php
  echo "<h2>Write a PHP program to filter out some elements with certain key-names.</h2>";
  $arr1 = [1,45,45,5,33,6];
  print_r(array_filter($arr1,"test"));
  function test($val){
      return $val-45;
  }

?>